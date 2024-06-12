<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rute untuk tampilan login dan registrasi
Route::get('/login', [AuthController::class, 'formlogin'])->name('login');
Route::get('/register', [AuthController::class, 'formregister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk proses login
Route::post('/login', [AuthController::class, 'login']);

