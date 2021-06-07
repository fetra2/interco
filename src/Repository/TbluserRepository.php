<?php

namespace App\Repository;

use App\Entity\Tbluser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tbluser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbluser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbluser[]    findAll()
 * @method Tbluser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbluserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbluser::class);
    }

    // /**
    //  * @return Tbluser[] Returns an array of Tbluser objects
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
    public function findOneBySomeField($value): ?Tbluser
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
