<?php

namespace App\Repository;

use App\Entity\SocialMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

class SocialMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SocialMedia::class);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function saveSocialMedia(SocialMedia $socialMedia)
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($socialMedia);
        $entityManager->flush();
    }
}