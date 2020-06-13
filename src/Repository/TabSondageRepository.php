<?php

namespace App\Repository;

use App\Entity\TabSondage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabSondage|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabSondage|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabSondage[]    findAll()
 * @method TabSondage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabSondageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabSondage::class);
    }

    // /**
    //  * @return TabSondage[] Returns an array of TabSondage objects
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
    public function findOneBySomeField($value): ?TabSondage
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
