<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class LoginService{

    /**
     * @var EntityManagerInterface
     */

    public function __construc(
        EntityManagerInterface $entityManager
    ){
        $this->entityManager = $entityManager;
    }

    public function logUser($summonerName, $password){
        return ["summonerName" => $summonerName , "password" => $password, "success" => true];
    } 
}