<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;

Route::prefix('auth')->name('auth.')->group(function () {

    // Route Public
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');

    // Route Protected (Menggunakan auth:api agar konsisten)
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
        Route::get('me', [AuthController::class, 'me'])->name('me');

        // PENTING: Arahkan ke method 'me' jika kamu belum buat method 'profile' di AuthController
        // Ini akan menampilkan data user yang sedang login
        Route::get('profile', [AuthController::class, 'me'])->name('profile');
    });
});

// Route Protected untuk Product
Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
});