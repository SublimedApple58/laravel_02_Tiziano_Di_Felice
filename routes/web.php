<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

// ROTTE

// Pubblic controller
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('aboutUs');

// Services controller
Route::get('/services', [ServicesController::class, 'info'])->name('services');
        // sto indicando alla rotta che dovrà accogliere un dato
Route::get('/service/detail/{id}', [ServicesController::class, 'detail'])->name('service.detail');