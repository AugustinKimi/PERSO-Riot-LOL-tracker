<?php
namespace App\Service;



use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\UserDataService;

class UserGameHistoryService{

    /**
     * @var HttpClientInterface
     */
    private $httpClient;
    

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    /**
     * @var UserDataService
     */
    private $userData;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag,
        UserDataService $userData
        ){
            $this->httpClient = $httpClient;
            $this->parameterBag = $parameterBag;
            $this->userData = $userData;
    }



    public function getUserGameHistory(string $summonerName){
        $riotToken = $this->parameterBag->get('riot_token');
            
        $userGameHistoryUrl = "https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid";
        if(!isset($this->userData->getUserIds($summonerName)['puuid'])){
            return ["success" => false];
        }
        $userPuuid = $this->userData->getUserIds($summonerName)['puuid'];

        $searchGameHistoryUrl = sprintf('%s/%s/%s', $userGameHistoryUrl, $userPuuid, 'ids?count=10');

        $gameHistory = $this->httpClient->request('GET', $searchGameHistoryUrl , [
            'headers' => [
                "X-Riot-Token" =>$riotToken
            ]]);
        if($gameHistory->getStatusCode() != 200){
            return ["success" => false];
        }

        $gameHistoryArray = $gameHistory->toArray();

        $gameHistoryDataArray = [];

        foreach ($gameHistoryArray as $gameId) {

            $gameDataUrl = "https://europe.api.riotgames.com/lol/match/v5/matches";
            $searchGameDataUrl = sprintf('%s/%s', $gameDataUrl, $gameId);

            $gameHistory = $this->httpClient->request('GET', $searchGameDataUrl , [
                'headers' => [
                    "X-Riot-Token" =>$riotToken
                ]]);

            $gameDataArray = $gameHistory->toArray();

            $gameHistoryDataArray[] = $gameDataArray;
        }
        // var_dump($gameHistoryDataArray);
        return $gameHistoryDataArray;
    }
}