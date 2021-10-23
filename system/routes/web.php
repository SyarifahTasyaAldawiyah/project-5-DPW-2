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




Route::get('admin/beranda', [HomeController::class, 'showberanda']);
Route::get('admin/kategori', [HomeController::class, 'showkategori']);
Route::get('admin/user', [HomeController::class, 'showuser']);


Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('produk', ProdukController::class);
	Route::resource('user', UserController::class);
});

Route::get('login', [AuthController::class, 'showlogin'] );
Route::post('login', [AuthController::class, 'loginProcess'] );



Route::get('/contact',  [IndexController::class, 'showcontact']);
Route::get('/products',  [IndexController::class, 'showproducts']);
Route::get('/about',  [IndexController::class, 'showabout']);
Route::get('/client',  [IndexController::class, 'showclient']);