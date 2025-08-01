<?php

use App\Models\Testimoni;
use App\Models\Registrant;
use App\Exports\PendaftarExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\RegistrantController;

Route::get('/', function () {
    $testimonis = Testimoni::where('status', 'publish')->get();
    return view('homepage', compact('testimonis'));
})->name('home');

Route::get('/program', function () {
    return view('program-template');
})->name('program');

Route::get('/profil', function () {
    return view('profil-mainriang');
})->name('profil-mainriang');

Route::get('/daycare', function () {
    return view('daycare');
})->name('daycare');

Route::get('/playgroup', function () {
    return view('playgroup');
})->name('playgroup');

Route::get('/tk', function () {
    return view('tk');
})->name('tk');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/trilogi', function () {
    return view('trilogi');
})->name('trilogi');

Route::get('/galeri', function () {
    return view('galeri-kegiatan');
})->name('galeri-kegiatan');

Route::get('/mengapa', function () {
    return view('mengapa');
})->name('mengapa');

Route::get('/kemitraan', function () {
    return view('public.kemitraan');
})->name('kemitraan');

Route::get('/status', function () {
    return view('pendaftaran-status');
});
Route::get('/detail-pendaftaran/{unique_id}', [RegistrantController::class, 'takeOne'])->name('detail-pendaftaran');
route::get('/petunjuk-pendaftaran', function() {
    return view('pendaftaran');
})->name('petunjuk-pendaftaran');

Route::get('/pendaftaran-edit/{unique_id}', [RegistrantController::class, 'showEdit'])->name('pendaftar.edit');
Route::put('pendaftaran-update/{unique_id}', [RegistrantController::class, 'update'])->name('pendaftar.update');

route::post('/pendaftaran', [RegistrantController::class, 'daftar'])->name('daftar');
route::get('/pendaftaran/{id?}', [RegistrantController::class, 'showform'])->name('form');
Route::get('/get-harga/{programId}', [ProgramController::class, 'getHarga']);

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->usertype === 'admin') {
        return redirect()->route('admin-dashboard');
    }
    $pendaftar = Registrant::where('user_id', $user->id)->get();
    return view('user-dashboard', compact('pendaftar'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [RegistrantController::class, 'statistik'])->name('admin-dashboard');
    Route::get('/admin/dashboard/pendaftaran', [RegistrantController::class, 'takeAll'])->name('admin-pendaftaran');
    Route::get('/admin/dashboard/export-pendaftar', function () {
        return Excel::download(new PendaftarExport, 'data-pendaftar.xlsx');
    })->name('admin.export-pendaftar');
    Route::get('/admin/dashboard/program', [ProgramController::class, 'index'])->name('admin-program');
    Route::post('/admin/dashboard/program/storeLocation', [ProgramController::class, 'storeLocation'])->name('admin-program-storeLocation');
    Route::post('/admin/dashboard/program/storeProgram', [ProgramController::class, 'storeProgram'])->name('admin-program-storeProgram');
    Route::delete('/admin/dashboard/program/{id}', [ProgramController::class, 'destroyProgram'])->name('admin-program.destroy');
    Route::delete('/admin/dashboard/location/{id}', [ProgramController::class, 'destroyLocation'])->name('admin-location.destroy');
    Route::get('/admin/dashboard/fasilitas', [FacilityController::class, 'preview']);
    Route::get('/admin/dashboard/testimoni', [TestimoniController::class, 'index'])->name('admin-testimoni');
    Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::put('/testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

});

Route::patch('/pendaftar/{id}/terima', [RegistrantController::class, 'terima'])->name('pendaftar.terima');
Route::patch('/pendaftar/{id}/tolak', [RegistrantController::class, 'tolak'])->name('pendaftar.tolak');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
