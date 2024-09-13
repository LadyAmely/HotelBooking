<?php

// src/Repository/HotelRepository.php
namespace App\Repository;


use App\Entity\Hotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class HotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotel::class);
    }

    public function filterByHotelStandard(array $criteria){

        $qb = $this->createQueryBuilder('h');

        if (isset($criteria['type_object'])) {
            $qb->andWhere('h.type_object = :type_object')
                ->setParameter('type_object', $criteria['type_object']);
        }

        return $qb->getQuery()->getResult();

    }


}
