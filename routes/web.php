<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CipherController;

Route::get('/', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/cipher', [CipherController::class, 'index']);
Route::post('/cipher', [CipherController::class, 'process']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth.login');
