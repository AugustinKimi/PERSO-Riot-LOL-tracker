<?php


namespace App\Service;

use App\Entity\Champion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class StoreChampionService{

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag,
        EntityManagerInterface $entityManager
    )
    {
        $this->httpClient = $httpClient;
        $this->parameterBag = $parameterBag;
        $this->entityManager = $entityManager;
    }


    public function getAllChampions(){
        $riotToken = $this->parameterBag->get('riot_token');

        $championsUrl = "http://ddragon.leagueoflegends.com/cdn/11.23.1/data/en_US/champion.json";

        $chapionData = $this->httpClient->request('GET', $championsUrl);

        if($chapionData->getStatusCode() != 200){
            return ["success" => false];
        }

        return $chapionData->toArray()["data"];
    }

    public function storeChampion(){
        
        $champions = $this->getAllChampions();

        foreach ($champions as $champion) {
            $existingChampion = $this->entityManager->getRepository(Champion::class)->findOneByChampionId($champion['key']);

            if (null !== $existingChampion) {
                continue;
            }

            $storeChampion  = new Champion();
            $storeChampion
                ->setChaampionName($champion["name"])
                ->setChampionId($champion["key"]);

            $this->entityManager->persist($storeChampion);
        };

        $this->entityManager->flush();
        return $champions;
    }

}