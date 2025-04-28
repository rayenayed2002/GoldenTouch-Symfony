<?php

namespace App\Repository;

use App\Entity\ReservMat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservMat>
 */
class ReservMatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservMat::class);
    }
    public function countReservationsByMateriel()
    {
        return $this->createQueryBuilder('r')
            ->select('m.nom_mat as nom_mat, COUNT(r.id_reserv) as count')
            ->join('r.materielle', 'm')
            ->groupBy('m.nom_mat')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return ReservMat[] Returns an array of ReservMat objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ReservMat
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
