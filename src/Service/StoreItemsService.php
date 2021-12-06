<?php


namespace App\Service;

use App\Entity\Items;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class StoreItemsService{

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


    public function getAllItems(){
        $riotToken = $this->parameterBag->get('riot_token');

        $itemsUrl = "http://ddragon.leagueoflegends.com/cdn/11.23.1/data/en_US/item.json";

        $itemsData = $this->httpClient->request('GET', $itemsUrl);

        if($itemsData->getStatusCode() != 200){
            return ["success" => false];
        }

        return $itemsData->toArray()["data"];
    }

    public function storeItems(){
        $items = $this->getAllItems();

        foreach ($items as $item) {
            $existingItem = $this->entityManager->getRepository(Items::class)->findOneByItemId(intval(explode(".", $item["image"]["full"])[0]));

            if (null !== $existingItem) {
                continue;
            }

            $storeItem  = new Items();
            $storeItem
                ->setName($item["name"])
                ->setDescription($item["description"])
                ->setPlainText($item["plaintext"])
                ->setTotalPrice($item["gold"]["total"])
                ->setBasePrice($item["gold"]["base"])
                ->setSellPrice($item["gold"]["sell"])
                ->setItemId(intval(explode(".", $item["image"]["full"])[0]))
                ->setImageUrl($item["image"]["full"]);

            $this->entityManager->persist($storeItem);
        };

        $this->entityManager->flush();
        return $items;
    }

}