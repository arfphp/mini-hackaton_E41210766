<?php

use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Kode ini mendefinisikan rute untuk GET request ke /penjualan yang akan diproses oleh PenjualanController pada method index().
// Nama rute ini ditetapkan sebagai 'hal_utama' dengan menggunakan metode name().
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('hal_utama');
// Kode ini mendefinisikan rute untuk POST request ke /penjualan/create yang akan diproses oleh PenjualanController pada method create().
Route::post('/penjualan/create', [PenjualanController::class, 'create']);
// Kode ini mendefinisikan rute untuk GET request ke /penjualan/{id} yang akan diproses oleh PenjualanController pada method edit().
// Nama rute ini ditetapkan sebagai 'hal_update'.
Route::get('/penjualan/{id}', [PenjualanController::class, 'edit'])->name('hal_update');
// Kode ini mendefinisikan rute untuk PUT request ke /penjualan/{id} yang akan diproses oleh PenjualanController pada method update().
Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
// Kode ini mendefinisikan rute untuk DELETE request ke /penjualan/{id} yang akan diproses oleh PenjualanController pada method destroy().
// Nama rute ini ditetapkan sebagai 'destroy'.
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('destroy');
