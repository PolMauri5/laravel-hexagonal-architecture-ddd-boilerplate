<?php

namespace Src\BaseProject\Entity\Infrastructure;

use App\Models\EloquentEntiy;
use DateTime;
use Src\BaseProject\Entity\Domian\Repository\EntityInterface;
use Src\BaseProject\Entity\Domian\DomainEntity as Entity;

class EloquentEntityRepository implements EntityInterface
{
    public function create(Entity $entity): ?Entity
    {
        $eloquentModel = EloquentEntiy::create([
            "name" => $entity->getName(),
            "description" => $entity->getDescription(),
            "is_active" => $entity->isActive(),
            'created_at' => $entity->getCreatedAt(),
            'updated_at' => $entity->getUpdatedAt(),
        ]);

        return new Entity(
            id: $eloquentModel->id,
            name: $eloquentModel->name,
            description: $eloquentModel->description,
            isActive: $eloquentModel->is_active,
            createdAt: new DateTime($eloquentModel->created_at),
            updatedAt: new DateTime($eloquentModel->updated_at)
        );
    
    }
}