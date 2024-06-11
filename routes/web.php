<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserManagementController;


// Rute untuk halaman user
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

Route::get('/keranjang', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');

// Rute untuk login dan register
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('user.modal.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.modal.login.post');
Route::post('/register', [UserController::class, 'register'])->name('user.modal.register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute admin dengan prefix 'admin'
Route::prefix('admin')->group(function () {
    Route::get('/', [Controller::class, 'admin'])->name('admin.dashboard');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    
    // Rute untuk Product CRUD
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Rute untuk User Management
    Route::get('/user', [Controller::class, 'user'])->name('user');
    
    // Transaksi
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi/{id}/details', [TransaksiDetailController::class, 'show'])->name('transaksi.details');

    Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [UserManagementController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create', [UserManagementController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserManagementController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{user}/edit', [UserManagementController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [UserManagementController::class, 'destroy'])->name('users.destroy');
}); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
