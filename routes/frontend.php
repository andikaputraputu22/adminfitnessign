<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/instructors', [InstructorController::class, 'index'])->name('frontend.instructor');