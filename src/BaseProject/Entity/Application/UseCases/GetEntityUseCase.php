<?php

namespace Src\BaseProject\Entity\Application\UseCases;

use Src\BaseProject\Entity\Domian\Repository\EntityRepository;
use Src\BaseProject\Role\Application\DTOs\EntityDTO;

class GetEntityUseCase
{
    private EntityRepository $entityRepository;

    public function __construct(EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    public function execute(): ?array
    {
        $entities = $this->entityRepository->findAll();
        
        return array_map(fn($entity) => EntityDTO::fromEntity($entity), $entities);
    }

}