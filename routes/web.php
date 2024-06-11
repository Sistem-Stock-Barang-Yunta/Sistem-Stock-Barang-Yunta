<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/admin', function () {
    return view('admin.dashboard');
});