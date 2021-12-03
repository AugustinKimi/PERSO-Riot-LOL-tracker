<?php


namespace App\Service;

use App\Service\UserGameHistoryService;

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
        $lastMatchs = $this->userGameHistory->getUserGameHistory($summonerName);
        // var_dump($lastMatchs);
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
                        "laneName" => $participantStats["lane"],
                        "win" => $participantStats["win"],
                        "cs" => $participantStats["totalMinionsKilled"]
                    ];
        
                    $champions[] = [
                        "championName" => $participantStats["championName"],
                        "win" => $participantStats["win"],
                        "kills" => $participantStats["kills"],
                        "deaths" =>$participantStats["deaths"] ,
                        "assists" => $participantStats["assists"],
                        "cs" => $participantStats["totalMinionsKilled"]
                    ];
                }
            }
        }

        
        foreach ($lanes as $lane) {
            var_dump($lane);
        }

        $minionsKilled = $minionsKilled/10;
        $damageDealt = $damageDealt/10;


        var_dump($wins, $loses, $minionsKilled, $damageDealt,  $lanes, $champions);
        return $lastMatchs;
    }

}