<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login/action', [LoginController::class, 'action'])->name('login.action');

Route::get('/admin/dashboard', [AdminController::class, 'home'])->name('dashboard.admin');
Route::get('/admin/tabungan', [AdminController::class, 'tabungan'])->name('tabungan.admin');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('laporan.admin');
Route::post('/admin/nabung', [AdminController::class, 'nabung'])->name('nabung.admin');
Route::get('/admin/laporan/{id_torodir}', [AdminController::class, 'laporantoro'])->name('laporantoro.admin');
