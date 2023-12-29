<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Models\Parfum;

// ############ Bagian Crud ######################
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\DashboardParfumController;

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

//about
Route::get('/about', function () {
    return view('about', [
        "title" => "About Sweet Parfume"
    ]);
});

Route::get('/home', function () {
    return view('layout');
});

Route::get('/produk', [ParfumController::class, 'index']);


Route::get('/about', function () {
    return view('about');
});


// #############################################################
// ####### BAGIAN ADMIN #####
// <<<<<<<<<< Route Login User >>>>>>>>>
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// <<<<<<< Dashboard Parfum >>>>>>>>>>>
Route::get('/dashboard/parfums/checkSlug', [DashboardParfumController::class, 'checkSlug'])
    ->middleware('auth');
Route::resource('/dashboard/parfums', DashboardParfumController::class)->middleware('auth');

// <<<<<<< Route Untuk Register >>>>>>>>>>>
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
