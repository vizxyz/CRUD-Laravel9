<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvi    der within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/barang', function () {
    return view('barang/barang');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/tambah_barang', function () {
    return view('tambah_barang');
});

Route::get('/tambah_transaksi', function () {
    return view('tambah_transaksi');
});

Route::get('/tambah_user', function () {
    return view('tambah_user');
});

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'create']);
Route::post('/barang/simpan', [BarangController::class, 'store']);
Route::get('/barang/tampil', [BarangController::class, 'show']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::post('/barang/update/', [BarangController::class,'update']);
Route::get('/barang/hapus/{id}', [BarangController::class,'delete']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/tampil', [UserController::class, 'show']);
Route::get('/user/edit/{id}', [UserController::class,'edit']);
Route::post('/user/update/', [UserController::class,'update']);
Route::get('/user/hapus/{id}', [UserController::class,'delete']);

Route::get('/session', [SessionController::class, 'index']);
Route::post('/session/buat', [SessionController::class, 'buat']);
Route::get('/session/hapus', [SessionController::class, 'hapus']);


Route::get('/login', [LoginController::class, 'index']);

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/tambah/{id}', [TransaksiController::class, 'create']);
Route::post('/transaksi/simpan', [TransaksiController::class, 'store']);
Route::get('/transaksi/tampil', [TransaksiController::class, 'show']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::post('/transaksi/update/', [TransaksiController::class,'update']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class,'delete']);