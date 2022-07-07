<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('app');
});

Route::get('/buku-tamu', [GuestBookController::class, 'index']);
Route::post('buku-tamu', [GuestBookController::class, 'create']);


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);
