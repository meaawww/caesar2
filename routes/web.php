<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CipherController;
use App\Http\Controllers\PenggunaController;

Route::get('/', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/cipher', [CipherController::class, 'index']);
Route::post('/cipher', [CipherController::class, 'process']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth.login');
Route::get('/create', [PenggunaController::class, 'create']);
Route::post('/store', [PenggunaController::class, 'store']);

Route::get('/edit/{id}', [PenggunaController::class, 'edit']);
Route::post('/update/{id}', [PenggunaController::class, 'update']);

Route::post('/delete/{id}', [PenggunaController::class, 'delete']);
