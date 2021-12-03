<?php 

namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\UserDataService;



class LiveMatchService{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

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
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag,
        UserDataService $userData
    ) {
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
        $this->parameterBag = $parameterBag;
        $this->userData = $userData;
    }


    public function getLiveMatchData(string $summonerName){
        $liveMatchUrl = "https://euw1.api.riotgames.com/lol/spectator/v4/active-games/by-summoner";
        $riotToken = $this->parameterBag->get('riot_token');

        if(!isset($this->userData->getUserIds($summonerName)['id'])){
            return ["success" => false];
        }
        $summonerId = $this->userData->getUserIds($summonerName)['id'];
        $riotSearchUrl = sprintf('%s/%s', $liveMatchUrl, $summonerId);
        $matchData = $this->httpClient->request('GET', $riotSearchUrl, [
            'headers' => [
                'X-Riot-Token' => $riotToken,
            ],
        ]);
        if($matchData->getStatusCode() != 200){
            return ["success" => false];
        }
        // var_dump($riotSearchUrl);
        // var_dump($matchData->toArray());

        return $matchData->toArray() ;
    }

}