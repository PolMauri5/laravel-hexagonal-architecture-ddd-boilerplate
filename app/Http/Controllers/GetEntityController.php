<?php

namespace App\Http\Controllers;

use Exception;
use Src\BaseProject\Entity\Infrastructure\Controllers\GetEntityController as GetEntityCoreController;

final class GetEntityController
{
    private GetEntityCoreController $getEntityCoreController;

    public function __constructor(GetEntityCoreController $getEntityCoreController)
    {
        $this->getEntityCoreController = $getEntityCoreController;
    }

    public function __invoke()
    {
        try {
            $entity = $this->getEntityCoreController->__invoke();

            return response()->json([
                "message" => "Entity fetched correctly...",
                "entity" => $entity
            ], 200);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}