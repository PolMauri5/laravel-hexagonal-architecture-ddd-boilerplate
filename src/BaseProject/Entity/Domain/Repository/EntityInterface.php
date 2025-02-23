<?php

namespace Src\BaseProject\Entity\Domian\Repository;

use Src\BaseProject\Entity\Domian\DomainEntity as Entity;

interface EntityInterface
{
    /**
     * Your methods, "CRUD" example
     */

    public function create(Entity $entity): ?Entity;
    public function findById(int $id): ?Entity;
    /**
     * @return Entity[] 
     */
    public function findAll(): ?array;
    // Todo
    public function update(): ?Entity;
    public function delete(int $id): bool;
}