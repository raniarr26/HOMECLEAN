<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

// Rute untuk halaman user
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/jasa', [Controller::class, 'jasa'])->name('jasa');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

// Rute untuk halaman admin
Route::prefix('admin')->group(function () {
    Route::get('/', [Controller::class, 'admin'])->name('admin.dashboard');

    // Rute untuk Product CRUD
    Route::get('/products', [Controller::class, 'product'])->name('page.products.index');
    Route::get('/products/create', [Controller::class, 'create'])->name('page.product.create');
    Route::post('/products', [Controller::class, 'store'])->name('page.product.store');
    Route::get('/products/{id}', [Controller::class, 'show'])->name('page.product.show');
    Route::get('/products/{id}/edit', [Controller::class, 'edit'])->name('page.product.edit');
    Route::put('/products/{id}', [Controller::class, 'update'])->name('page.product.update');
    Route::delete('/products/{id}', [Controller::class, 'destroy'])->name('page.product.destroy');

    // Rute untuk User Management
    Route::get('/user', [Controller::class, 'user'])->name('user');

    // Rute untuk Report dan dashboard
    Route::get('/report', [Controller::class, 'report'])->name('admin.report');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    // rute untuk user
Route::get('/admin/page/users', [UserController::class, 'index'])->name('page.users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
