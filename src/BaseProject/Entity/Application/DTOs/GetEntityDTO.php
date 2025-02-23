<?php

namespace Src\BaseProject\Role\Application\DTOs;

use Src\BaseProject\Entity\Domian\DomainEntity as Entity;

class EntityDTO
{
    public function __construct(
        public int $id,
        public string $name,
        public ?string $description,
        public bool $isActive,
        public string $createdAt,
        public string $updatedAt
    ) {}

    public static function fromEntity(Entity $entity): self
    {
        return new self(
            id: $entity->getId(),
            name: $entity->getName(),
            description: $entity->getDescription(),
            isActive: $entity->isActive(),
            createdAt: $entity->getCreatedAt()->format('Y-m-d H:i:s'),
            updatedAt: $entity->getUpdatedAt()->format('Y-m-d H:i:s')
        );
    }
}
