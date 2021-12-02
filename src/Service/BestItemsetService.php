<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class BestItemsetService{

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
    )
    {
        $this->parameterBag = $parameterBag;
        $this->httpClient = $httpClient;
        $this->userData = $userData;
    }

    public function get200BestPlayers(){
        $riotToken = $this->parameterBag->get('riot_token');
        $best200PlayersUrl = "";



        $best200Players = $this->httpClient->request('GET', $best200PlayersUrl, [
            'headers' => [
                "X-Riot-Token" => $riotToken
            ]
            ]);

        return $best200Players->toArray();
    }


    public function getLastChallengerGames(){

        $riotToken = $this->parameterBag->get('riot_token');
        $challengerGamesUrl = "";



        $lastChallengerGames = $this->httpClient->request('GET', $challengerGamesUrl, [
            'headers' => [
                "X-Riot-Token" => $riotToken
            ]
            ]);


        return $lastChallengerGames->toArray();

    }
}