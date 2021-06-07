<?php

namespace App\Repository;

use App\Entity\Tblgestionbur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tblgestionbur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblgestionbur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblgestionbur[]    findAll()
 * @method Tblgestionbur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblgestionburRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblgestionbur::class);
    }

    // /**
    //  * @return Tblgestionbur[] Returns an array of Tblgestionbur objects
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
    public function findOneBySomeField($value): ?Tblgestionbur
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
