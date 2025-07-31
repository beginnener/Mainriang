<?php

use App\Models\Registrant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegistrantController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\TestimoniController;
use App\Exports\PendaftarExport;
use Maatwebsite\Excel\Facades\Excel;

// Public Pages Routes
Route::get('/', function () { return view('public.homepage'); })->name('home');
Route::get('/profil', function () { return view('public.pages.profil-mainriang'); })->name('profil-mainriang');
Route::get('/daycare', function () { return view('public.pages.daycare'); })->name('daycare');
Route::get('/playgroup', function () { return view('public.pages.playgroup'); })->name('playgroup');
Route::get('/tk', function () { return view('public.pages.tk'); })->name('tk');
Route::get('/fasilitas', function () { return view('public.pages.fasilitas'); })->name('fasilitas');
Route::get('/trilogi', function () { return view('public.pages.trilogi'); })->name('trilogi');
Route::get('/galeri', function () { return view('public.pages.galeri-kegiatan'); })->name('galeri-kegiatan');
Route::get('/mengapa', function () { return view('public.pages.mengapa'); })->name('mengapa');
Route::get('/kemitraan', function () { return view('public.pages.kemitraan'); })->name('kemitraan');

// Pendaftaran Router
Route::get('/status', function () { return view('public.pendaftaran.pendaftaran-status'); });
route::get('/petunjuk-pendaftaran', function() { return view('public.pendaftaran.pendaftaran'); })->name('petunjuk-pendaftaran');

// Registrant Routes
Route::get('/detail-pendaftaran/{unique_id}', [RegistrantController::class, 'takeOne'])->name('detail-pendaftaran');
Route::get('/pendaftaran-edit/{unique_id}', [RegistrantController::class, 'showEdit'])->name('pendaftar.edit');
Route::put('pendaftaran-update/{unique_id}', [RegistrantController::class, 'update'])->name('pendaftar.update');
route::post('/pendaftaran', [RegistrantController::class, 'daftar'])->name('daftar');
route::get('/pendaftaran/{id?}', [RegistrantController::class, 'showform'])->name('form');
Route::get('/get-harga/{programId}', [ProgramController::class, 'getHarga']);

// Dashboard with aut
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->usertype === 'admin') {
        return redirect()->route('admin-dashboard');
    }
    $pendaftar = Registrant::where('user_id', $user->id)->get();
    return view('user.user-dashboard', compact('pendaftar'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Dashboard Routes
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
    Route::get('/admin/dashboard/testimoni', [TestimoniController::class, 'preview'])->name('admin-testimoni');
});

// Registrant Actions - only for admin
Route::patch('/pendaftar/{id}/terima', [RegistrantController::class, 'terima'])->name('pendaftar.terima');
Route::patch('/pendaftar/{id}/tolak', [RegistrantController::class, 'tolak'])->name('pendaftar.tolak');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
