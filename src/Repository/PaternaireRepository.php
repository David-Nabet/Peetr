<?php

namespace App\Repository;

use App\Entity\Paternaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Paternaire>
 *
 * @method Paternaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paternaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paternaire[]    findAll()
 * @method Paternaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaternaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paternaire::class);
    }

//    /**
//     * @return Paternaire[] Returns an array of Paternaire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Paternaire
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
