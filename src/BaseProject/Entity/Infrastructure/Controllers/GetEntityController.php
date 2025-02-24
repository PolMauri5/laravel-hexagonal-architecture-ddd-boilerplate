<?php

namespace Src\BaseProject\Entity\Infrastructure\Controllers;

use Exception;
use Src\BaseProject\Entity\Application\UseCases\GetEntityUseCase;

final class GetEntityController
{
    private GetEntityUseCase $getEntityUseCase;

    public function __construct(GetEntityUseCase $getEntityUseCase)
    {
        $this->getEntityUseCase = $getEntityUseCase;
    }

    public function __invoke()
    {
        try {
            $this->getEntityUseCase->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}