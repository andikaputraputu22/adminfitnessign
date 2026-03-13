<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\DetailInstructorController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use App\Http\Controllers\Frontend\DetailHealthController;
use App\Http\Controllers\Frontend\TrainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/instructors/{service:slug}', [InstructorController::class, 'index'])->name('frontend.instructor');

Route::get('/trainer/{service:slug}', [TrainerController::class, 'index'])->name('frontend.trainer');

Route::get('/blog', [BlogController::class, 'index'])->name('frontend.blog');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('frontend.blog.show');

Route::get('/detail_instructor/{slug}', [DetailInstructorController::class, 'index'])->name('frontend.detail_instructor');

Route::get('/health/{slug}', [DetailHealthController::class, 'show'])
    ->name('frontend.health.detail');