<?php

namespace App\Repository;

use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Location::class);
    }

    public function findAvailableLocations(): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.isAvailable = :available')
            ->setParameter('available', true)
            ->orderBy('l.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save(Location $location, bool $flush = false): void
    {
        $this->getEntityManager()->persist($location);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Location $location, bool $flush = false): void
    {
        $this->getEntityManager()->remove($location);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}