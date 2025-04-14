<?php

namespace App\Repository;

use App\Entity\ReservationPerso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationPerso>
 */
class ReservationPersoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationPerso::class);
    }

    /**
     * Trouve les réservations pour un personnel donné
     */
    public function findByPersonnel(int $personnelId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.personnel = :personnelId')
            ->setParameter('personnelId', $personnelId)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les réservations pour un événement donné
     */
    public function findByEvent(int $Id): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.event = :Id')
            ->setParameter('Id', $Id)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve toutes les réservations avec les relations chargées
     */
    public function findAllWithDetails(): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.personnel', 'p')
            ->addSelect('p')
            ->leftJoin('r.event', 'e')
            ->addSelect('e')
            ->getQuery()
            ->getResult();
    }
}