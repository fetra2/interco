<?php

namespace App\Repository;

use App\Entity\Tbluser;
use App\Entity\Tblbureau;
use App\Entity\Tblgestionbur;
use App\Entity\Tblvalidation;
use App\Entity\Rattachement;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Tblvalidation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblvalidation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblvalidation[]    findAll()
 * @method Tblvalidation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblvalidationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblvalidation::class);
    }

    // /**
    //  * @return Tblvalidation[] Returns an array of Tblvalidation objects
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
    public function findOneBySomeField($value): ?Tblvalidation
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findAllValidation()
    {
        $dql = 'SELECT val FROM App\Entity\TblValidation val';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }

    public function findAllValidationInnerJoin()
    {
        $dql = 'SELECT val1.codique, val1.idgest,val1.iduser, val1.dateval, val1.status, bur.nombureau, us.nomuser, gest.idgestion, gest.nomrec
        FROM  App\Entity\Tblvalidation val1 LEFT OUTER JOIN
         App\Entity\Tblgestionbur gest WITH val1.idgest = gest.idgestion LEFT OUTER JOIN
         App\Entity\Tbluser us WITH val1.iduser = us.iduser LEFT OUTER JOIN
         App\Entity\Tblbureau bur WITH val1.codique = bur.ncodique ORDER BY val1.codique asc, val1.dateval desc';

        
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }

    public function findAllLastValidationForEachCodique()
    {
        //$dql = 'SELECT val1.codique, val1.idgest,val1.iduser, val1.dateval, val1.status, bur.nombureau, us.nomuser, gest.idgestion, gest.nomrec, rat.codique as code, rat.dirpm
        $dql = 'SELECT val1.codique, val1.iduser, val1.dateval, bur.nombureau, us.nomuser, gest.nomrec, rat.dirpm, us.passuser as pw
        FROM  App\Entity\Tblvalidation val1 LEFT OUTER JOIN
        App\Entity\Tblgestionbur gest WITH val1.idgest = gest.idgestion LEFT OUTER JOIN
        App\Entity\Tbluser us WITH val1.iduser = us.iduser LEFT OUTER JOIN
        App\Entity\Tblbureau bur WITH val1.codique = bur.ncodique LEFT OUTER JOIN 
        App\Entity\Rattachement rat WITH val1.codique = rat.codique
         WHERE val1.dateval=(SELECT MAX(val2.dateval)
            FROM App\Entity\Tblvalidation val2 WHERE val2.codique=val1.codique)';

        
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }

    public function findAllLastValidationForOneCodique($codique)
    {
        $dql = 'SELECT val1.codique, val1.iduser, val1.dateval, bur.nombureau, us.nomuser, gest.nomrec, rat.dirpm, us.passuser as pw
        FROM  App\Entity\Tblvalidation val1 LEFT OUTER JOIN
        App\Entity\Tblgestionbur gest WITH val1.idgest = gest.idgestion LEFT OUTER JOIN
        App\Entity\Tbluser us WITH val1.iduser = us.iduser LEFT OUTER JOIN
        App\Entity\Tblbureau bur WITH val1.codique = bur.ncodique LEFT OUTER JOIN 
        App\Entity\Rattachement rat WITH val1.codique = rat.codique
         WHERE val1.codique='.$codique.' order by val1.dateval desc ';

        
        $query = $this->getEntityManager()->createQuery($dql)->setMaxResults(10);
        return $query->execute();
    }
}
