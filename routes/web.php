<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/audrey', function () {
    return view('halo.blade.php');
});

use App\Http\Controllers\CipherController;

Route::get('/cipher', [CipherController::class, 'index']);
Route::post('/cipher', [CipherController::class, 'process']);
