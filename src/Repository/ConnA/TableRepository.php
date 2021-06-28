<?php

declare(strict_types=1);

namespace App\Repository\ConnA;

use App\Entity\ConnA\Table;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Class TableRepository
 */
class TableRepository
{
    /**
     * @var \Doctrine\Persistence\ObjectRepository
     */
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Table::class);
    }

    public function find(int $id): ?Table
    {
        /** @var Table $entity */
        $entity = $this->repository->find($id);

        return $entity;
    }
}
