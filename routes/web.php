<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.staff.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin', function () {
    return view('frontend.admin.admin');
});

Route::get('/admin/crud-tambah', function () {
    return view('frontend.admin.create');
});

Route::get('/admin/crud-edit', function () {
    return view('frontend.admin.edit');
});

Route::get('/manajemen-staff', function () {
    return view('frontend.admin.manajemen-staff');
});
Route::get('stockout', function () {
    return view('frontend.admin.stokout');
});
Route::get('stockin', function () {
    return view('frontend.admin.stockin');
});