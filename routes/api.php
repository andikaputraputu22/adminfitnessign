<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\EnsureEmailVerified;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/verify-email', [AuthController::class, 'verifyEmail'])->name('verify-email');
Route::post('/resend-verification-email', [AuthController::class, 'resendVerificationEmail'])->name('resend-verification-email');

Route::middleware([AuthMiddleware::class, EnsureEmailVerified::class])->group(function() {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/services/instructors', [ServiceController::class, 'getInstructors'])->name('get-instructors');
Route::get('/categories/{id}', [ServiceController::class, 'getCategory'])->name('get-category');
