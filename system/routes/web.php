<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get('template', function () {
    return view('template');
});


Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::get('login', [AuthController::class, 'showlogin'] );

Route::get('admin/beranda', [HomeController::class, 'showberanda']);
Route::get('admin/kategori', [HomeController::class, 'showkategori']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/update/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('admin/user', [UserController::class, 'store']);
Route::get('admin/user/{user}', [UserController::class, 'show']);
Route::get('admin/user/{user}/edit', [UserController::class, 'edit']);
Route::put('admin/user/update/{user}', [UserController::class, 'update']);
Route::delete('admin/user/{user}', [UserController::class, 'destroy']);


Route::get('login', [AuthController::class, 'showlogin'] );
Route::post('login', [AuthController::class, 'loginProcess'] );
Route::post('logout', [AuthController::class, 'logout'] );



Route::get('/contact',  [IndexController::class, 'showcontact']);
Route::get('/products',  [IndexController::class, 'showproducts']);
Route::get('/about',  [IndexController::class, 'showabout']);
Route::get('/client',  [IndexController::class, 'showclient']);