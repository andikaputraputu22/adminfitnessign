<?php

use Illuminate\Support\Facades\Route;

Route::domain('adminfitnessign.test')->group(function () {
    require __DIR__ . '/admin.php';
});

Route::domain('fitnessign.test')->group(function () {
    require __DIR__ . '/frontend.php';
});