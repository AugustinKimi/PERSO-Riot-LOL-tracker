<?php
namespace App\Service;

use App\Entity\Items;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\UserDataService;
use Doctrine\ORM\EntityManagerInterface;

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
    
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag,
        EntityManagerInterface $entityManager,
        UserDataService $userData
        ){
            $this->httpClient = $httpClient;
            $this->parameterBag = $parameterBag;
            $this->userData = $userData;
            $this->entityManager = $entityManager;
    }

    public function getAllHistoryData($summonerName){
        $riotToken = $this->parameterBag->get('riot_token');
            
        $userGameHistoryUrl = "https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid";
        if(!isset($this->userData->getUserIds($summonerName)['puuid'])) return ["success" => false];
        $userPuuid = $this->userData->getUserIds($summonerName)['puuid'];
        $searchGameHistoryUrl = sprintf('%s/%s/%s', $userGameHistoryUrl, $userPuuid, 'ids?count=10');

        $gameHistory = $this->httpClient->request('GET', $searchGameHistoryUrl , [
            'headers' => [
                "X-Riot-Token" =>$riotToken
            ]]);
        if($gameHistory->getStatusCode() != 200) return ["success" => false];

         return $gameHistory->toArray();
    }

    public function getUserGameHistory(string $summonerName){
        $gameHistoryArray = $this->getAllHistoryData($summonerName);
        $gameHistoryDataArray = [];

        foreach ($gameHistoryArray as $gameId) {
            $gameDataArray = $this->getMatchDetails($gameId);
            $summonerGameDataArray = ["gameId" => $gameId];

            foreach ($gameDataArray["info"]["participants"] as $participant) {
                
                if($participant["summonerName"] == $summonerName){
                    // var_dump( $participant);
                    $summonerGameDataArray["win"] = $participant["win"];
                    $summonerGameDataArray["kills"] = $participant["kills"];
                    $summonerGameDataArray["deaths"] = $participant["deaths"];
                    $summonerGameDataArray["assists"] = $participant["assists"];
                    $summonerGameDataArray["championName"] = $participant["championName"];
                    $summonerGameDataArray["gameDuration"] = $gameDataArray["info"]["gameDuration"];
                    $summonerGameDataArray["gameDate"] = $gameDataArray["info"]["gameStartTimestamp"];
                    $summonerGameDataArray["gameMode"] = $gameDataArray["info"]["gameMode"];

                    $itemsDataArray = [
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item0"]]),
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item1"]]),
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item2"]]),
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item3"]]),
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item4"]]),
                        $itemData = $this->entityManager->getRepository(Items::class)->findBy(["itemId" => $participant["item5"]])
                    ];

                    foreach ($itemsDataArray as $key => $itemArray) {
                        $index = sprintf("item%s", strval( $key + 1));
                        if(isset($itemArray[0])){
                            $item = $itemArray[0];
                            $summonerGameDataArray[$index] = [
                                "name" => $item->getName(),
                                "description" => $item->getDescription(),
                                "plainText" => $item->getPlainText(),
                                "basePrice" => $item->getBasePrice(),
                                "totalPrice" => $item->getTotalPrice(),
                                "sellPrice" => $item->getSellPrice(),
                                "itemId" => $item->getItemId(),
                                "iamgeUrl" => $item->getImageUrl(),
                            ];
                        }
                    } 
                    $gameHistoryDataArray[] = $summonerGameDataArray;
                }
            }
        }
        return $gameHistoryDataArray;
    }

    public function getMatchDetails($gameId){
        $riotToken = $this->parameterBag->get('riot_token');
        $gameDataUrl = "https://europe.api.riotgames.com/lol/match/v5/matches";
        $searchGameDataUrl = sprintf('%s/%s', $gameDataUrl, $gameId);

        $gameHistory = $this->httpClient->request('GET', $searchGameDataUrl , [
            'headers' => [
                "X-Riot-Token" =>$riotToken
            ]]);

        $gameDataArray = $gameHistory->toArray();

        return $gameDataArray;
    }

}