<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HealthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/instructors', [InstructorController::class, 'index'])->name('frontend.instructor');

Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');

Route::get('/health', [HealthController::class, 'index'])->name('frontend.health');
