<?php

namespace App\Repository;

use App\Entity\UserGameHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserGameHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserGameHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserGameHistory[]    findAll()
 * @method UserGameHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserGameHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserGameHistory::class);
    }

    // /**
    //  * @return UserGameHistory[] Returns an array of UserGameHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserGameHistory
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
