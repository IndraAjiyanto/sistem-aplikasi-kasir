<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\TransController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/pengguna', PenggunaController::class)->middleware('admin');
Route::resource('/barang', BarangController::class)->middleware('auth');
Route::resource('/pemasok', PemasokController::class)->middleware('auth');
Route::resource('/penjualan', PenjualanController::class)->middleware('auth');
Route::resource('/stok', BarangMasukController::class)->middleware('auth');
Route::resource('/transaksi', TransaksiController::class);
