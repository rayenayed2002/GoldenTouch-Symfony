<?php

namespace App\Repository;

use App\Entity\Material;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MaterialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Material::class);
    }

    public function findAvailableMaterials(): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.isAvailable = :available')
            ->setParameter('available', true)
            ->orderBy('m.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save(Material $material, bool $flush = false): void
    {
        $this->getEntityManager()->persist($material);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Material $material, bool $flush = false): void
    {
        $this->getEntityManager()->remove($material);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}