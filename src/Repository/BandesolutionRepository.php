<?php

namespace App\Repository;

use App\Entity\Bandesolution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bandesolution>
 *
 * @method Bandesolution|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bandesolution|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bandesolution[]    findAll()
 * @method Bandesolution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BandesolutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bandesolution::class);
    }

//    /**
//     * @return Bandesolution[] Returns an array of Bandesolution objects
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

//    public function findOneBySomeField($value): ?Bandesolution
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
