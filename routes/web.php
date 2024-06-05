<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// ROTTE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/services', [PublicController::class, 'services'])->name('services');