<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('Home');
Route::get('/shop', [Controller::class, 'shop'])->name('Shop');
Route::get('/contact', [Controller::class, 'contact'])->name('Contact');
// Route::get('/keranjang', [Controller::class, 'keranjang'])->name('Keranjang');

// Rute untuk login
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login_pelanggan', [UserController::class, 'loginProses'])->name('loginproses.pelanggan');
// Rute untuk pendaftaran
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('registerPelanggan .process');
// Rute untuk password reset
Route::post('/password', [UserController::class, 'Password'])->name('password.request');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/keranjang', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/admin', [Controller::class, 'index2'])->name('admin.index2')->middleware('auth'); // Pastikan hanya pengguna yang terautentikasi yang bisa mengakses

Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/product', function () {
        $title = 'Daftar Produk'; // Definisikan variabel $title
        return view('admin.page.product', compact('title')); // Kirim hanya variabel $title ke tampilan
    })->name('product.index');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');