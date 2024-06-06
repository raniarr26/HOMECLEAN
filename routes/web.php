<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\JasaController;


// Rute untuk halaman user
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

// Rute untuk halaman admin
Route::prefix('admin')->group(function () {
    Route::get('/', [Controller::class, 'admin'])->name('admin.dashboard');

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

    // Rute untuk Report dan dashboard
    Route::get('/report', [Controller::class, 'report'])->name('admin.report');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    // Rute untuk user
    Route::get('/admin/page/users', [UserController::class, 'index'])->name('page.users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

});
Route::group(['middleware' => 'auth'], function () {
    Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/keranjang', [CartController::class, 'showCart'])->name('cart.show');
});
