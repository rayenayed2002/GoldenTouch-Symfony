<?php

namespace App\Repository;

use App\Entity\ReservationLieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationLieu>
 */
class ReserverLieuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationLieu::class);
    }

    public function add(ReservationLieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReservationLieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find reservations by user ID
     */
    public function findByUserId(int $userId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user_id = :val')
            ->setParameter('val', $userId)
            ->orderBy('r.date_reservation', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
}