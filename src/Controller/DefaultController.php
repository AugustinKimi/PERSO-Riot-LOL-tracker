<?php

namespace App\Controller;

use App\Service\Last10GamesStatsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserGameHistoryService;
use App\Service\LiveMatchService;
use App\Service\LoginService;
use App\Service\SignUpService;
use App\Service\StoreChampionService;
use App\Service\UserDataService;
use App\Service\StoreItemsService;

class DefaultController extends AbstractController
{

    

    /**
     *  @var LiveMatchService
     */
    private $liveMatchService;

    /**
     * @var userGameHistoryService
     */
    private $userGameHistory;

    /**
     * @var UserDataService
     */
    private $userData;

    /**
     * @var StoreItemsService
     */
    private $storeItems;

    /**
     * @var StoreChampionService
     */
    private $storeChampion;

    /**
     * @var Last10GamesStatsService
     */
    private $lastGames;

    /**
     * @var SignUpService
     */
    private $signUp;

    /**
     * @var LoginService
     */
    private $login;

    public function __construct(
        LiveMatchService $liveMatchService,
        UserGameHistoryService $userGameHistory,
        UserDataService $userData,
        StoreItemsService $storeItems,
        StoreChampionService $storeChampion,
        Last10GamesStatsService $lastGames,
        SignUpService $signUp,
        LoginService $login
        )
    {
        $this->liveMatchService = $liveMatchService;
        $this->userGameHistory = $userGameHistory;
        $this->userData = $userData;
        $this->storeItems = $storeItems;
        $this->storeChampion = $storeChampion;
        $this->lastGames = $lastGames;
        $this->signUp = $signUp;
        $this->login = $login;
    }

    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->json('hello world.');
    }
    /**
     * @Route("/error", name="error")
     */
    public function error(): Response
    {
        return $this->json('nope.');
    }

    /**
     * @Route("/live-match/{summonerName}")
     */
    public function liveMatch(string $summonerName): Response
    {
        $liveMatchData = $this->liveMatchService->getLiveMatchData($summonerName);

        return $this->json($liveMatchData);
    }

    /**
     * @Route("/game-history/{summonerName}")
     */

    public function gameHistory(string $summonerName): Response
    {   
        $gameHistory = $this->userGameHistory->getUserGameHistory($summonerName);

        return $this->json($gameHistory);
    }

    /**
     * @Route("/user-data/{summonerName}")
     */

    public function userData(string $summonerName): Response
    {   
        $userIds = $this->userData->getUserIds($summonerName);
        $userData = $this->userData->getUserData($userIds['id']);
        $userChampionsData = $this->userData->getUserChampionData($userIds['id']);

        return $this->json(array_merge($userData, $userChampionsData));
    }

    /**
     * @Route("/store-items")
     */

    public function storeItems(): Response
    {   
        $storeItems = $this->storeItems->storeItems();
        return $this->json($storeItems);
    }

    /**
     * @Route("/store-champions")
     */

    public function storeChampions(): Response
    {   
        $storeChampion = $this->storeChampion->storeChampion();
        return $this->json($storeChampion);
    }

    /**
     * @Route("/last-games-stats/{summonerName}")
     */

    public function lastGamesStats($summonerName): Response
    {   
        $lastGames = $this->lastGames->getStats($summonerName);
        return $this->json($lastGames);
    }

    /**
     * @Route("/login")
     */

    public function login(Request $request): Response
    {   
        $params = json_decode($request->getContent(), true);
        // var_dump($requestArray);
        $response = $this->login->logUser($params["summonerName"], $params["password"]);
        return $this->json($response);
    }

    /**
     * @Route("/signup")
     */

    public function signup(Request $request): Response
    {   
        $params = json_decode($request->getContent(), true);
        $response = $this->signUp->signUpUser($params["summonerName"], $params["password"]);
        // return $this->json($response);
        return $this->json($response);
    }

}
