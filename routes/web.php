<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('app-guest');
});
Route::get('/success', function () {
    return view('contents.guest.GuestSuccess');
})->name('success');

Route::get('/tamu', [GuestController::class, 'index'])->name('guestinput.content');
Route::post('tamu', [GuestController::class, 'create'])->name('guestinput.create');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/buku-tamu', [GuestBookController::class, 'index'])->name('guest.content');
    Route::get('/buku-tamu-add', [GuestBookController::class, 'add'])->name('guest.add');
    Route::post('buku-tamu', [GuestBookController::class, 'create'])->name('guest.create');
    Route::delete('/buku-tamu/delete/{id}', [GuestBookController::class, 'delete'])->name('guest.delete');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/buku-tamu-cetak', [GuestBookController::class, 'doPrint'])->name('guest.doPrint');
    Route::get('/buku-tamu-cetak', [GuestBookController::class, 'print'])->name('guest.print');
    // Route::get('/buku-tamu-unduh', [GuestBookController::class, 'download_pdf']);

});


Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.attempt');
});

