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

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('hal_utama');
Route::post('/penjualan/create', [PenjualanController::class, 'create']);
Route::get('/penjualan/{id}', [PenjualanController::class, 'edit'])->name('hal_update');
Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('destroy');
