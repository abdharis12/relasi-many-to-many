<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengikutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SppdController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::resource('/pengikut', PengikutController::class);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/sppd', SppdController::class);
