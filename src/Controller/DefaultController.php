<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserGameHistoryService;
use App\Service\LiveMatchService;
use App\Service\UserDataService;

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

    public function __construct(
        LiveMatchService $liveMatchService,
        UserGameHistoryService $userGameHistory,
        UserDataService $userData
        )
    {
        $this->liveMatchService = $liveMatchService;
        $this->userGameHistory = $userGameHistory;
        $this->userData = $userData;
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


}
