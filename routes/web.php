<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');


Route::get('stockout', function () {
    return view('frontend.admin.stokout');
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
Route::get('/item', [ItemController::class, 'index'])->name('frontend.admin.admin');
Route::get('/admin/tampil_item', [ItemController::class, 'item'])->name('admin.tampil_item');
// Routes for item CRUD
Route::get('/admin/crud-tambah', [ItemController::class, 'create'])->name('admin.crud-tambah');
Route::post('/admin/crud-tambah', [ItemController::class, 'store']);
Route::get('/admin/crud-edit-item/{id}', [ItemController::class, 'edit'])->name('admin.crud-edit-item');
Route::put('/admin/crud-update-item/{id}', [ItemController::class, 'update'])->name('admin.crud-update-item');
Route::delete('/admin/hapus-item/{id}', [ItemController::class, 'destroy'])->name('admin.hapus-item');

// Route stockIn

Route::get('stockin', [StockInController::class, 'index'])->name('admin.stockin');
Route::get('/admin/tambah-stockin', [StockInController::class, 'create'])->name('admin.tambah_stockin');
Route::post('/admin/store_stockin', [StockInController::class, 'store'])->name('admin.store_stockin');
Route::get('/admin/edit-stockin/{id}', [StockInController::class, 'edit'])->name('admin.edit_stockin');
Route::put('/admin/edit-stockin/{id}', [StockInController::class, 'update']);
Route::delete('/admin/hapus-stockin/{id}', [StockInController::class, 'destroy'])->name('admin.hapus_stockin');

// Route stockout
Route::get('stockout', [StockoutController::class, 'index'])->name('admin.stockout');
Route::get('/admin/tambah-stockout', [stockoutController::class, 'create'])->name('admin.tambah_stockout');
Route::post('/admin/store_stockout', [stockoutController::class, 'store'])->name('admin.store_stockout');
Route::get('/admin/edit-stockout/{id}', [stockoutController::class, 'edit'])->name('admin.edit_stockout');
Route::put('/admin/edit-stockout/{id}', [stockoutController::class, 'update']);
Route::delete('/admin/hapus-stockout/{id}', [stockoutController::class, 'destroy'])->name('admin.hapus_stockout');

//PDF
Route::get('/admin/generate-pdf', [ItemController::class, 'generatePDF'])->name('admin.generate_pdf');

// dashboar admin dan staff
Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

// //grafik
Route::get('/stock', [DashboardController::class, 'stock'])->name('admin.stock');