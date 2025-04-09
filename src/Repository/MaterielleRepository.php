<?php

namespace App\Repository;

use App\Entity\Materielle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Materielle>
 */
class MaterielleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materielle::class);
    }

    /**
     * @return Materielle[]
     */
    public function findAll(): array
    {
        return $this->createQueryBuilder('m')
            ->select('m')
            ->getQuery()
            ->getResult();
    }

    public function findById(int $id): ?Materielle
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.id_mat = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
