<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/instructors', [InstructorController::class, 'index'])->middleware('auth')->name('instructors');
Route::get('/instructors/create', [InstructorController::class, 'create'])->middleware('auth')->name('instructors.create');
Route::post('/instructors/store', [InstructorController::class, 'store'])->middleware('auth')->name('instructors.store');
Route::get('/instructors/{id}/delete', [InstructorController::class, 'delete'])->middleware('auth')->name('instructors.delete');

Route::get('/clients', [ClientController::class, 'index'])->middleware('auth')->name('clients');
Route::get('/clients/detail/{id}', [ClientController::class, 'detail'])->middleware('auth')->name('clients.detail');
Route::get('/clients/{id}/delete', [ClientController::class, 'delete'])->middleware('auth')->name('clients.delete');

Route::get('/services', [ServiceController::class, 'index'])->middleware('auth')->name('services');
Route::post('/services/store', [ServiceController::class, 'store'])->middleware('auth')->name('services.store');
Route::get('/services/{id}/delete', [ServiceController::class, 'delete'])->middleware('auth')->name('services.delete');
Route::put('/services/{id}/update', [ServiceController::class, 'update'])->middleware('auth')->name('services.update');

Route::get('/orders', [OrderController::class, 'index'])->middleware('auth')->name('orders');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');