<?php

namespace App\Repository;

use App\Entity\Przystanek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Przystanek|null find($id, $lockMode = null, $lockVersion = null)
 * @method Przystanek|null findOneBy(array $criteria, array $orderBy = null)
 * @method Przystanek[]    findAll()
 * @method Przystanek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrzystanekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Przystanek::class);
    }

    // /**
    //  * @return Przystanek[] Returns an array of Przystanek objects
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
    public function findOneBySomeField($value): ?Przystanek
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
