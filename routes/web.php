<?php

<<<<<<< HEAD

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');





Route::get('stockout', function () {
    return view('frontend.admin.stokout');
});
Route::get('stockin', function () {
    return view('frontend.admin.stockin');
});





Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// kategori
Route::get('/admin/tampilkategori', [CategoryController::class, 'index'])->name('admin.tampilkategori');
Route::get('/admin/crud-tambah-kategori', [CategoryController::class, 'create'])->name('admin.crud-tambah-kategori');
Route::post('/admin/crud-tambah-kategori', [CategoryController::class, 'store']);
Route::get('/admin/crud-edit-kategori/{id_kategori}', [CategoryController::class, 'edit'])->name('admin.crud-edit-kategori');
Route::put('/admin/crud-edit-kategori/{id_kategori}', [CategoryController::class, 'update']);
Route::delete('/admin/crud-delete/{id_kategori}', [CategoryController::class, 'destroy'])->name('admin.crud-delete-kategori');
    

// supplier
Route::get('/admin/tampil_supplier', [SupplierController::class, 'index'])->name('admin.tampil_supplier');
Route::get('/admin/tambah_supplier', [SupplierController::class, 'create'])->name('admin.tambah_supplier');
Route::post('/admin/tambah_supplier', [SupplierController::class, 'store']);
Route::get('/admin/edit_supplier/{id}', [SupplierController::class, 'edit'])->name('admin.edit_supplier');
Route::put('/admin/edit_supplier/{id}', [SupplierController::class, 'update']);
Route::delete('/admin/hapus_supplier/{id}', [SupplierController::class, 'destroy'])->name('admin.hapus_supplier');


// user
Route::get('/admin/tampil_staff', [UserController::class, 'tampil'])->name('admin.tampil_staff');
Route::get('/manajemen-staff', [UserController::class, 'index'])->name('admin.manajemen.staff');
Route::get('/admin/edit_staff/{id}', [UserController::class, 'edit'])->name('admin.edit_staff');
Route::put('/admin/edit_staff/{id}', [UserController::class, 'update']);
Route::delete('/admin/delete_user/{id}', [UserController::class, 'destroy'])->name('admin.delete_user');

// Items
Route::get('/admin', [ItemController::class, 'index'])->name('frontend.admin.admin');
Route::get('/admin/tampil_item', [ItemController::class, 'item'])->name('admin.tampil_item');
// Routes for item CRUD
Route::get('/admin/crud-tambah', [ItemController::class, 'create'])->name('admin.crud-tambah');
Route::post('/admin/crud-tambah', [ItemController::class, 'store']);
Route::get('/admin/crud-edit-item/{id}', [ItemController::class, 'edit'])->name('admin.crud-edit-item');
Route::put('/admin/crud-update-item/{id}', [ItemController::class, 'update'])->name('admin.crud-update-item');
Route::delete('/admin/hapus-item/{id}', [ItemController::class, 'destroy'])->name('admin.hapus-item');

=======
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rute untuk tampilan login dan registrasi
Route::get('/login', [AuthController::class, 'formlogin'])->name('login');
Route::get('/register', [AuthController::class, 'formregister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk proses login
Route::post('/login', [AuthController::class, 'login']);

>>>>>>> origin/FajarAngga
