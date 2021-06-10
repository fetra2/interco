<?php

namespace App\Repository;

use App\Entity\Rattachement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rattachement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rattachement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rattachement[]    findAll()
 * @method Rattachement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RattachementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rattachement::class);
    }

    // /**
    //  * @return Rattachement[] Returns an array of Rattachement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rattachement
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
