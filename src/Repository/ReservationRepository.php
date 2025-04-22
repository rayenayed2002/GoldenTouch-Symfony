<?php
// src/Repository/ReservationRepository.php
namespace App\Repository;

use App\Entity\ReserverLieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReserverLieu::class);
    }

    public function findByUserPaginated(int $userId, int $page = 1, int $limit = 10): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user_id = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('r.date_reservation', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}