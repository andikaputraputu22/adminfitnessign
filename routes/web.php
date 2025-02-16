<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
