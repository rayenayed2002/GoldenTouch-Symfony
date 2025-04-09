<?php

namespace App\Repository;

use App\Entity\Personnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PersonnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personnel::class);
    }

    public function search(string $term): array
    {
        $terms = array_filter(preg_split('/\s+/', trim($term)), function($term) {
            return !empty($term);
        });

        if (empty($terms)) {
            return [];
        }

        $queryBuilder = $this->createQueryBuilder('p');
        $orX = $queryBuilder->expr()->orX();

        foreach ($terms as $key => $singleTerm) {
            $param = ':term'.$key;
            $orX->add($queryBuilder->expr()->orX(
                $queryBuilder->expr()->like('p.nomP', $param),
                $queryBuilder->expr()->like('p.prenomP', $param),
                $queryBuilder->expr()->like('p.serviceP', $param),
                $queryBuilder->expr()->like('p.statutP', $param),
                $queryBuilder->expr()->like('p.descriptionP', $param),
                $queryBuilder->expr()->like('p.tarifP', $param)
            ));
            $queryBuilder->setParameter($param, '%'.addcslashes($singleTerm, '%_').'%');
        }

        $allResults = $queryBuilder
            ->andWhere($orX)
            ->orderBy('p.nomP', 'ASC')
            ->getQuery()
            ->getResult();

        $filteredResults = array_filter($allResults, function($personnel) use ($terms) {
            $personnelText = implode(' ', [
                $personnel->getNomP(),
                $personnel->getPrenomP(),
                $personnel->getServiceP(),
                $personnel->getStatutP(),
                $personnel->getDescriptionP(),
                $personnel->getTarifP()
            ]);

            foreach ($terms as $term) {
                if (stripos($personnelText, $term) === false) {
                    return false;
                }
            }
            return true;
        });

        return array_values($filteredResults);
    }

    public function findByFilters(?string $statut, ?string $service, ?string $sort, string $order = 'ASC'): array
    {
        $qb = $this->createQueryBuilder('p');
        
        if ($statut) {
            $qb->andWhere('p.statutP = :statut')
               ->setParameter('statut', $statut);
        }
        
        if ($service) {
            $qb->andWhere('p.serviceP = :service')
               ->setParameter('service', $service);
        }
        
        if ($sort) {
            $qb->orderBy('p.' . $sort, $order);
        }
        
        return $qb->getQuery()->getResult();
    }

    public function getStatsByService(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.serviceP as service, COUNT(p.idP) as count')
            ->groupBy('p.serviceP')
            ->getQuery()
            ->getResult();
    }

    public function getReservationStats(): array
    {
        return $this->createQueryBuilder('p')
            ->select('CONCAT(p.nomP, \' \', p.prenomP) as personnel', 'COUNT(r.idR) as reservations')
            ->leftJoin('App\Entity\ReservationPerso', 'r', 'WITH', 'p.idP = r.idP')
            ->groupBy('p.idP')
            ->orderBy('reservations', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findSimilarPersonnel(Personnel $personnel): ?Personnel
    {
        $qb = $this->createQueryBuilder('p')
            ->where('LOWER(p.nomP) = LOWER(:nom)')
            ->andWhere('LOWER(p.prenomP) = LOWER(:prenom)')
            ->andWhere('p.serviceP = :service')
            ->setParameter('nom', $personnel->getNomP())
            ->setParameter('prenom', $personnel->getPrenomP())
            ->setParameter('service', $personnel->getServiceP());

        if ($personnel->getIdP()) {
            $qb->andWhere('p.idP != :id')
               ->setParameter('id', $personnel->getIdP());
        }

        return $qb->setMaxResults(1)
                  ->getQuery()
                  ->getOneOrNullResult();
    }

    public function personnelExists(Personnel $personnel): bool
    {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.idP)')
            ->where('LOWER(p.nomP) = LOWER(:nom)')
            ->andWhere('LOWER(p.prenomP) = LOWER(:prenom)')
            ->andWhere('p.serviceP = :service')
            ->setParameter('nom', $personnel->getNomP())
            ->setParameter('prenom', $personnel->getPrenomP())
            ->setParameter('service', $personnel->getServiceP());

        if ($personnel->getIdP()) {
            $qb->andWhere('p.idP != :id')
               ->setParameter('id', $personnel->getIdP());
        }

        return $qb->getQuery()->getSingleScalarResult() > 0;
    }



    public function createQueryByFilters(?string $statut, ?string $service, ?string $sort, ?string $order)
{
    $qb = $this->createQueryBuilder('p');
    
    if ($statut) {
        $qb->andWhere('p.statutP = :statut')
           ->setParameter('statut', $statut);
    }
    
    if ($service) {
        $qb->andWhere('p.serviceP = :service')
           ->setParameter('service', $service);
    }
    
    if ($sort) {
        $qb->orderBy('p.'.$sort, $order);
    }
    
    return $qb->getQuery();
}
}