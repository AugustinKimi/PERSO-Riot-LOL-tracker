<?php 

namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;



class LiveMatchService{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    public function __construct(
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag
    ) {
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
        $this->parameterBag = $parameterBag;
    }
}