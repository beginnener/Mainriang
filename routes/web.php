<?php

use App\Models\Registrant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegistrantController;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/program', function () {
    return view('program-template');
});
Route::get('/profil', function () {
    return view('profil-mainriang');
});
Route::get('/daycare', function () {
    return view('daycare');
});
Route::get('/playgroup', function () {
    return view('playgroup');
});
Route::get('/tk', function () {
    return view('tk');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/trilogi', function () {
    return view('trilogi');
});
Route::get('/galeri', function () {
    return view('galeri-kegiatan');
});
Route::get('/mengapa', function () {
    return view('mengapa');
});
Route::get('/admin-pendaftaran', function () {
    return view('admin-pendaftaran');
})->name('admin-pendaftaran');
route::get('/petunjuk-pendaftaran', function() {
    session(['status_pendaftaran' => 0]);
    return view('pendaftaran');
})->name('petunjuk-pendaftaran');

route::post('/pendaftaran', [RegistrantController::class, 'daftar'])->name('daftar');
route::get('/pendaftaran/{id?}', [RegistrantController::class, 'showform'])->name('form');
Route::get('/get-harga/{programId}', [ProgramController::class, 'getHarga']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
