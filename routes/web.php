<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

route::get('/pendaftaran', function() {
    return view('pendaftaran');
})->name('pendaftaran');
route::get('/pendaftaran/data-anak', function() {
    return view('pendaftaran-dataAnak');
})->name('pendaftaran');
route::get('/pendaftaran/data-ortu', function() {
    return view('pendaftaran-dataOrtu');
})->name('pendaftaran');
route::get('/pendaftaran/input-kontak', function() {
    return view('pendaftaran-inputKontak');
})->name('pendaftaran');
Route::get('/pendaftaran/konfirmasi-bayar1', function () {
    return view('pendaftaran-konfirmasiBayar1');
});
route::get('/pendaftaran/data-ortu', function() {
    return view('pendaftaran-dataOrtu');
})->name('pendaftaran');
route::get('/pendaftaran/data-ortu', function() {
    return view('pendaftaran-dataOrtu');
})->name('pendaftaran');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
