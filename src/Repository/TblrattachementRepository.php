<?php

namespace App\Repository;

use App\Entity\Tblrattachement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tblrattachement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblrattachement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblrattachement[]    findAll()
 * @method Tblrattachement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblrattachementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblrattachement::class);
    }

    // /**
    //  * @return Tblrattachement[] Returns an array of Tblrattachement objects
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
    public function findOneBySomeField($value): ?Tblrattachement
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
