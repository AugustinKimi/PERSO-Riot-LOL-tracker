<?php


namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UserDataService{

    /**
     * @var HttpClientInteface
     */
    private $httpClient;
    
    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag
    )
    {
        $this->parameterBag = $parameterBag;
        $this->httpClient = $httpClient;
        
    }


    public function getUserIds(string $summonerName){

        $riotToken = $this->parameterBag->get('riot_token');
        
        $userIdsUrl = "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name";
        $searchIdsUrl = sprintf("%s/%s", $userIdsUrl, $summonerName);
        $userIds = $this->httpClient->request('GET', $searchIdsUrl, [
            "headers" => [
                "X-Riot-Token" => $riotToken
            ]
        ]);

        if($userIds->getStatusCode() != 200) {
            return ["success" => false];
        }
        $userIdsArray = $userIds->toArray();


        return array_merge(["success" => true], $userIdsArray);
    }

    public function userExist(string $summonerName){
        $riotToken = $this->parameterBag->get('riot_token');
        
        $userIdsUrl = "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name";
        $searchIdsUrl = sprintf("%s/%s", $userIdsUrl, $summonerName);
        $userIds = $this->httpClient->request('GET', $searchIdsUrl, [
            "headers" => [
                "X-Riot-Token" => $riotToken
            ]
        ]);

        if($userIds->getStatusCode() != 200) {
            return ["exist" => false];
        }
        return ["exist" => true];
    }

    public function getUserData(string $summonerId){

        $riotToken = $this->parameterBag->get('riot_token');

        $userDataUrl = "https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner";
        $searchDataUrl = sprintf("%s/%s", $userDataUrl, $summonerId);
        $userData = $this->httpClient->request('GET', $searchDataUrl, [
            "headers" => [
                "X-Riot-Token" => $riotToken
            ]
        ]);
        if($userData->getStatusCode() != 200) {
            return ["success" => false];
        }

        $userDataArray = $userData->toArray();

        return $userDataArray;
    }

    public function getUserChampionData(string $summonerId){

        $riotToken = $this->parameterBag->get('riot_token');

        $userChampionDataUrl = "https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner";
        $searchDataUrl = sprintf("%s/%s", $userChampionDataUrl, $summonerId);
        $userData = $this->httpClient->request('GET', $searchDataUrl, [
            "headers" => [
                "X-Riot-Token" => $riotToken
            ]
        ]);

        if($userData->getStatusCode() != 200) {
            return ["success" => false];
        }
        $userChampionDataArray = $userData->toArray();

        return $userChampionDataArray;
    }
}