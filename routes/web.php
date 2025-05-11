<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrantController;
use App\Models\Registrant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/program', function () {
    return view('program-template');
});
Route::get('/profil', function () {
    return view('profil-mainriang');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/mengapa', function () {
    return view('mengapa');
});
route::get('/petunjuk-pendaftaran', function() {
    session(['status_pendaftaran' => 0]);
    return view('pendaftaran');
})->name('petunjuk-pendaftaran');

route::post('/pendaftaran', [RegistrantController::class, 'daftar'])->name('daftar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
