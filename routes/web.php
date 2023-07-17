<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesDetailController;
use App\Http\Controllers\MenuCategoryController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('menu/category', MenuCategoryController::class);
Route::get('/menu/harus-restock', [App\Http\Controllers\MenuController::class, 'showRestock']);

Route::resource('menu', MenuController::class);
Route::resource('outlet', OutletController::class);
Route::get('/penjualan/{outlet_name}', [App\Http\Controllers\SalesController::class, 'showByOutlet']);
Route::get('/penjualan/{outlet_name}/tanggal/{date}', [App\Http\Controllers\SalesController::class, 'showByOutletDate']);
Route::get('/penjualan/tanggal/{date}', [App\Http\Controllers\SalesController::class, 'allOutletByDate']);
Route::get('/penjualan/detail-penjualan/{id}', [App\Http\Controllers\SalesController::class, 'showDetail']);
Route::resource('penjualan', SalesController::class);
Route::resource('penjualan/detail', SalesDetailController::class);