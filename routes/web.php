<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//products
Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "produk"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Ganti dengan metode yang sesuai untuk menampilkan halaman login
Route::post('/login', [LoginController::class, 'login']); // Ganti dengan metode yang sesuai untuk proses login


//about
Route::get('/about', function () {
    return view('about', [
        "title" => "About Sweet Parfume"
    ]);
});

Route::get('/', function () {
    return view('layout');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/about', function () {
    return view('about');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
