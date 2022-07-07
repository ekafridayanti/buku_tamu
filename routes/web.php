<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('app');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/buku-tamu', [GuestBookController::class, 'index']);
    Route::post('buku-tamu', [GuestBookController::class, 'create']);
});


Route::group(['middleware' => ['auth']], function() {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.attempt');
});

