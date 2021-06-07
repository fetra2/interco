<?php

namespace App\Repository;

use App\Entity\Tblbureau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tblbureau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblbureau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblbureau[]    findAll()
 * @method Tblbureau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblbureauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblbureau::class);
    }

    // /**
    //  * @return Tblbureau[] Returns an array of Tblbureau objects
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
    public function findOneBySomeField($value): ?Tblbureau
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findNombureauByCodique()
    {
        $dql = 'SELECT bur.nombureau FROM App\Entity\Tblbureau bur';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }
}
