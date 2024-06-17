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
    return view('admin.admin');
});

Route::get('/admin/crud-tambah', function () {
    return view('admin.create');
});

Route::get('/admin/crud-edit', function () {
    return view('admin.edit');
});

Route::get('/manajemen-staff', function () {
    return view('admin.manajemen-staff');
});
Route::get('stokout', function () {
    return view('admin.stokout');
});
Route::get('stockin', function () {
    return view('admin.stockin');
});