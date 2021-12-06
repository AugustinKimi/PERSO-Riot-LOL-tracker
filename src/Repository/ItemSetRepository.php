<?php

namespace App\Repository;

use App\Entity\ItemSet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ItemSet|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemSet|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemSet[]    findAll()
 * @method ItemSet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemSetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemSet::class);
    }

    // /**
    //  * @return ItemSet[] Returns an array of ItemSet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ItemSet
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
