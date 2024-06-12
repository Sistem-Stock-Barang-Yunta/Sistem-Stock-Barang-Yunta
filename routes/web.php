<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.staff.dashboard');
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