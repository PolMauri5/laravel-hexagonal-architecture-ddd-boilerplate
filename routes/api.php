<?php

use App\Http\Controllers\GetEntityController;
use Illuminate\Support\Facades\Route;

Route::get('entity', GetEntityController::class);