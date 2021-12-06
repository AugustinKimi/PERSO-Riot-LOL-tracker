<?php

namespace App\Repository;

use App\Entity\Top3Champions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Top3Champions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Top3Champions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Top3Champions[]    findAll()
 * @method Top3Champions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Top3ChampionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Top3Champions::class);
    }

    // /**
    //  * @return Top3Champions[] Returns an array of Top3Champions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Top3Champions
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
