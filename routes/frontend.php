<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/instructors/{id}', [InstructorController::class, 'index'])->name('frontend.instructor');

Route::get('/blog', [BlogController::class, 'index'])->name('frontend.blog');
