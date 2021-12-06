<?php


namespace App\Service;

use App\Entity\Champion;
use Doctrine\DBAL\Driver\Mysqli\Initializer\Charset;
use Doctrine\ORM\EntityManagerInterface;
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

     /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag,
        EntityManagerInterface $entityManager
    )
    {
        $this->parameterBag = $parameterBag;
        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        
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
        foreach ($userDataArray as $user) {
            if($user["queueType"] == "RANKED_SOLO_5x5") return [ "leagueData" => $user];
        }

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

        $champion1 = $this->entityManager->getRepository(Champion::class)->findOneByChampionId($userData->toArray()[0]["championId"]);
        $champion2 = $this->entityManager->getRepository(Champion::class)->findOneByChampionId($userData->toArray()[1]["championId"]);
        $champion3 = $this->entityManager->getRepository(Champion::class)->findOneByChampionId($userData->toArray()[2]["championId"]);

        $championArray1 = $userData->toArray()[0];
        $championArray2 = $userData->toArray()[1];
        $championArray3 = $userData->toArray()[2];

        $championArray1["championName"] = $champion1->getChampionName();
        $championArray2["championName"] = $champion2->getChampionName();
        $championArray3["championName"] = $champion3->getChampionName();
        $userChampionDataArray = [
            $championArray2,
            $championArray1,
            $championArray3
        ];

        return ["championsData" => $userChampionDataArray];
    }
}