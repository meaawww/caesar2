<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/audrey', function () {
    return view('halo');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

use App\Http\Controllers\CipherController;

Route::get('/cipher', [CipherController::class, 'index']);
Route::post('/cipher', [CipherController::class, 'process']);
