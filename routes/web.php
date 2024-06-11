<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.staff.dashboard');
// });
// Route untuk menampilkan form login
Route::get('/', [AuthController::class, 'formlogin'])->name('login');

Route::post('/', [AuthController::class, 'login']);

// Route untuk menampilkan form register
Route::get('/register', [AuthController::class, 'formregister'])->name('register');

// Route untuk menangani register
Route::post('/register', [AuthController::class, 'register']);

