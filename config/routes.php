<?php

use App\Controllers\homeController;
use App\Controllers\movieController;
use App\Kernel\Router\Route;
return [
    Route::get('/user', [homeController::class, 'user']),
    Route::get('/user/{id}', [movieController::class, 'user']),
    Route::post('/user/{id}', [movieController::class, 'add']),
    Route::put('/user/{id}', [movieController::class, 'reWrite'])
    Route::delete('/user/{id}', [movieController::class, 'delete']),
    

];