<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeminjamanController;

// LOGIN
Route::get('/', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// HOME
Route::get('/home', [PeminjamanController::class, 'home']);

// CRUD
Route::get('/form', [PeminjamanController::class, 'form']);
Route::post('/store', [PeminjamanController::class, 'store']);
Route::get('/riwayat', [PeminjamanController::class, 'riwayat']);

// CEK KETERSEDIAAN
Route::get('/cek', [PeminjamanController::class, 'cek']);
Route::post('/cek', [PeminjamanController::class, 'cekTanggal']);