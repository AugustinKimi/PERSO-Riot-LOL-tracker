<?php

namespace App\Repository;

use App\Entity\PlayerIndividualMatchData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlayerIndividualMatchData|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerIndividualMatchData|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerIndividualMatchData[]    findAll()
 * @method PlayerIndividualMatchData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerIndividualMatchDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerIndividualMatchData::class);
    }

    // /**
    //  * @return PlayerIndividualMatchData[] Returns an array of PlayerIndividualMatchData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerIndividualMatchData
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
