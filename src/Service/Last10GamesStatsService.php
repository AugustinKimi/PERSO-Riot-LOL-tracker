<?php


namespace App\Service;

use App\Service\UserGameHistoryService;
use Symfony\Component\HttpClient\Chunk\LastChunk;

class Last10GamesStatsService{

    /**
     * @var UserGameHistoryService
     */

    private $userGameHistory;

    public function __construct(
        UserGameHistoryService $userGameHistory
    )
    {
        $this->userGameHistory = $userGameHistory;
    }


    public function getStats($summonerName){
        $lastMatchsId = $this->userGameHistory->getAllHistoryData($summonerName);
        $lastMatchs = [];
        foreach ($lastMatchsId as $matchId) {
            $lastMatchs[] = $this->userGameHistory->getMatchDetails($matchId);
        }

        $wins = 0;
        $loses = 0;
        $lanes = [];
        $champions = [];
        $minionsKilled = 0;
        $damageDealt  = 0;
        foreach ($lastMatchs as $match) {
            foreach ($match["info"]["participants"] as $participantStats) {
                if($participantStats["summonerName"] == $summonerName){
                    if($participantStats["win"]) $wins++;
                    else $loses++ ;
                    $minionsKilled += $participantStats['totalMinionsKilled'];
                    $damageDealt  += $participantStats["totalDamageDealtToChampions"];
        
                    $lanes[] = [
                        "name" => $participantStats["lane"],
                        "win" => $participantStats["win"],
                        "cs" => $participantStats["totalMinionsKilled"],
                        "dmgDealt" => $participantStats["totalDamageDealtToChampions"]
                    ];
        
                    $champions[] = [
                        "name" => $participantStats["championName"],
                        "win" => $participantStats["win"],
                        "kills" => $participantStats["kills"],
                        "deaths" =>$participantStats["deaths"] ,
                        "assists" => $participantStats["assists"],
                        "cs" => $participantStats["totalMinionsKilled"],
                        "dmgDealt" => $participantStats["totalDamageDealtToChampions"]
                    ];
                }
            }
        }

       

        $lanesArray = $this->sortMostPlayed($lanes);
        $championsArray = $this->sortMostPlayed($champions);


        $minionsKilled = $minionsKilled/10;
        $damageDealt = $damageDealt/10;

        $mostPlayedChampions = [
            $championsArray[0],
            $championsArray[1],
            $championsArray[2],
        ];

        $mostPlayedLanes = [
            $lanesArray[0],
            $lanesArray[1]
        ];

        $returnDataArray = [
            "wins" => $wins,
            "loses" => $loses,
            "averageCs" => $minionsKilled,
            "averageDmgDealt" => $damageDealt,
            "mostPlayedLanes" => $mostPlayedLanes,
            "mostPlayedChampions" => $mostPlayedChampions
        ];

        return $returnDataArray;
    }

    public function sortMostPlayed($array){
        $newArray = [];
        foreach ($array as $item) {
            if(array_key_exists($item["name"], $newArray)){
                $newArray[$item["name"]]["count"] += 1 ;
                $newArray[$item["name"]]["averageCs"] += $item["cs"] ;
                $newArray[$item["name"]]["dmgDealt"] += $item["dmgDealt"] ;
                if($item["win"]) $newArray[$item["name"]]["winCount"] += 1 ;
            }
            else {
                if($item['win']) $newArray[$item["name"]] = array_merge(
                    $item, [
                    "averageCs" =>  $item["cs"],
                    "dmgDealt" =>  $item["dmgDealt"],
                    "count" => 1,
                    "winCount" => 1,
                    "name" => $item["name"],

                ]);
                else $newArray[$item["name"]] = array_merge(
                    $item, [
                    "averageCs" =>  $item["cs"],
                    "dmgDealt" =>  $item["dmgDealt"],
                    "count" => 1,
                    "winCount" => 0,
                    "name" => $item["name"],
                ]);
            }
        }
        foreach ($newArray as $key => $item) {
            $newArray[$key]["averageCs"] =  $item["averageCs"]/ $item["count"];
            $newArray[$key]["winRatio"] =  $item["winCount"]/ $item["count"];
            $newArray[$key]["dmgDealt"] =  $item["dmgDealt"]/ $item["count"];
        }

        usort($newArray, function($a, $b) {
            return $b['count'] <=> $a['count'];
        }); 
        return $newArray;
    }

}