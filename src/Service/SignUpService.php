<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\UserDataService;

class SignUpService{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    
    /**
     * @var UserDataService
     */
    private $userData;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserDataService $userData
    ){
        $this->entityManager = $entityManager;
        $this->userData = $userData;
    }

    public function signUpUser($summonerName, $password){


        if(strlen($password) < 6){
            return ["success" => false];
        }
        $userIds = $this->userData->getUserIds($summonerName);
        if(!$userIds["success"]){
            return ["success" => false, "message" => "Cette compte League of Legends n'existe pas en EUW"];
        }

        $user = new User();
        $user
            ->setSummonerId($userIds["id"])
            ->setAccountId($userIds["accountId"])
            ->setPuuid($userIds["puuid"])
            ->setSummonerName($summonerName)
            ->setPassword($password);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return ["summonerName" => $summonerName , "password" => $password, "success" => true];
    } 


}