<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\TransaksiController;

// Rute umum untuk halaman-halaman dasar
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');
Route::get('/transaksi', [UserController::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

// Rute untuk autentikasi pengguna
Route::get('/login', function () {
    return view('user.page.index'); // Halaman login dengan modal login
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


    // Produk
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    // Checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::post('/checkout/callback', [CheckoutController::class, 'callback'])->name('checkout.callback');
    Route::get('/checkout/finish', [CheckoutController::class, 'finish'])->name('checkout.finish');
    Route::get('/checkout/unfinish', [CheckoutController::class, 'unfinish'])->name('checkout.unfinish');
    Route::get('/checkout/error', [CheckoutController::class, 'error'])->name('checkout.error');

    // Keranjang
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Transaksi
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

    // Resi pembelian
    Route::get('/receipt/{orderId}', [PurchaseController::class, 'showReceipt'])->name('purchase.receipt');
    // Riwayat pembelian
    Route::get('/history', [PurchaseController::class, 'history'])->name('purchase.history');



// Rute untuk admin yang memerlukan autentikasi dan peran admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.page.dashboard');
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.page.users.index');
    Route::post('/admin/users/{id}/promote', [AdminController::class, 'promoteUser'])->name('admin.page.users.promote');
    Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.page.users.create');
    Route::post('/admin/users', [AdminController::class, 'storeUser'])->name('admin.page.users.store');
    Route::get('/admin/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.page.users.edit');
    Route::put('/admin/users/{id}', [AdminController::class, 'updateUser'])->name('admin.page.users.update');
    Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.page.users.delete');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// Rute untuk pengguna yang sudah login
