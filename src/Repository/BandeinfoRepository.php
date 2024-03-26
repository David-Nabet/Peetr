<?php

namespace App\Repository;

use App\Entity\Bandeinfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bandeinfo>
 *
 * @method Bandeinfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bandeinfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bandeinfo[]    findAll()
 * @method Bandeinfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BandeinfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bandeinfo::class);
    }

//    /**
//     * @return Bandeinfo[] Returns an array of Bandeinfo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bandeinfo
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
