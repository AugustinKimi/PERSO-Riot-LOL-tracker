<?php

namespace App\Service;

use App\Entity\Champion;
use App\Entity\ItemSet;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class ItemSetService{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
     public function __construct(
         EntityManagerInterface $entityManager
     )
     {
         $this->entityManager = $entityManager;
     }

     public function createItemset($itemsArray, $summonerName, $championId, $description, $name){
        $itemSet = new ItemSet;

        $user = $this->entityManager->getRepository(User::class)->findOneBySummonerName($summonerName);
        $champion = $this->entityManager->getRepository(Champion::class)->findOneByChampionId($championId);

        if($user == null) return ["success"=> false];
        if($champion == null) return ["success"=> false];
        var_dump( $itemsArray["itemId1"]);

        $itemSet
        ->setItemId1(intval($itemsArray["itemId1"]))
        ->setItemId2(intval($itemsArray["itemId2"]))
        ->setItemId3(intval($itemsArray["itemId3"]))
        ->setItemId4(intval($itemsArray["itemId4"]))
        ->setItemId5(intval($itemsArray["itemId5"]))
        ->setItemId6(intval($itemsArray["itemId6"]))
        ->setUser($user)
        ->setChampion($champion)
        ->setChampionId($champion->getChampionId())
        ->setDescription($description)
        ->setName($name);

        $this->entityManager->persist($itemSet);

        $this->entityManager->flush();

        return ["success" => true];
     }

    public function getItemSet($userId, $championId){
        $itemSet = $this->entityManager->getRepository(ItemSet::class)->findAll(
            ["userId" => $userId, "championId" => $championId]
        );
        var_dump($itemSet);
    }

    public function getUserAllItemSets($summonerName){
        $user = $this->entityManager->getRepository(User::class)->findOneBySummonerName($summonerName);
        if($user == null) return ["success"=> false]; 
        $itemSet = $user->getItemSet();
        var_dump($itemSet->getName());
        return $user;
    }
}