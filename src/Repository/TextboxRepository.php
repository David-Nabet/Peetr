<?php

namespace App\Repository;

use App\Entity\Textbox;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Textbox>
 *
 * @method Textbox|null find($id, $lockMode = null, $lockVersion = null)
 * @method Textbox|null findOneBy(array $criteria, array $orderBy = null)
 * @method Textbox[]    findAll()
 * @method Textbox[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextboxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Textbox::class);
    }

//    /**
//     * @return Textbox[] Returns an array of Textbox objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Textbox
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
