<?php

declare(strict_types=1);

namespace App\Repository\ConnZ;

use App\Entity\ConnZ\Lamp;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Class LampRepository
 */
class LampRepository
{
    /**
     * @var \Doctrine\Persistence\ObjectRepository
     */
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Lamp::class);
    }

    public function find(int $id): ?Lamp
    {
        /** @var Lamp $entity */
        $entity = $this->repository->find($id);

        return $entity;
    }
}
