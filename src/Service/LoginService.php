<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class LoginService{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager
    ){
        $this->entityManager = $entityManager;
    }

    public function logUser($summonerName, $password){
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBySummonerName($summonerName);

        if(!$existingUser){
            return ["success" => false];
        }
        if(!password_verify($password, $existingUser->getPassword())){
            return ["success" => false];
        }


        return ["summonerName" => $summonerName , "success" => true];
    } 
}