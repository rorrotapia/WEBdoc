<?php

namespace App\Repository;

use App\Entity\TabReponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabReponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabReponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabReponse[]    findAll()
 * @method TabReponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabReponse::class);
    }

    // /**
    //  * @return TabReponse[] Returns an array of TabReponse objects
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
    public function findOneBySomeField($value): ?TabReponse
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
