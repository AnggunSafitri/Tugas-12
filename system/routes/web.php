<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Kategori2Controller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Produk2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontviewController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\BasePenjualController;


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


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('client', ClientController::class);
    Route::resource('penjual', PenjualController::class);

});
Route::get('test-alamat', [AdminController::class, 'cekAlamat']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);


Route::get('/', [FrontviewController::class, 'index']);
Route::get('/web', [FrontviewController::class, 'index']);
Route::get('/account', [FrontviewController::class, 'account']);
Route::get('/produk', [FrontviewController::class, 'produk']);
Route::get('/produkdetail/{produk}', [FrontviewController::class, 'produkdetail']);

Route::group(['middleware' => 'auth:penjual'], function(){
    Route::get('/penjual', [BasePenjualController::class, 'index']);
    Route::resource('penjual/produk', Produk2Controller::class);
    Route::resource('penjual/kategori', Kategori2Controller::class);
});

Route::get('test-collection', [FrontviewController::class, 'testCollection']);

