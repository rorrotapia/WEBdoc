<?php

namespace App\Repository;

use App\Entity\TabResultats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabResultats|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabResultats|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabResultats[]    findAll()
 * @method TabResultats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabResultatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabResultats::class);
    }

    // /**
    //  * @return TabResultats[] Returns an array of TabResultats objects
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
    public function findOneBySomeField($value): ?TabResultats
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
