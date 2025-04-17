<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
Route::get('/pendaftaran/data-anak', function () {
    return view('pendaftaran-dataAnak');
});
Route::get('/pendaftaran/data-ortu', function () {
    return view('pendaftaran-dataOrtu');
});
Route::get('/pendaftaran/konfirmasi-pembayaran1', function () {
    return view('pendaftaran-konfirmasiBayar');
});
Route::get('/pendaftaran/form-lanjutan', function () {
    return view('pendaftaran-formLanjutan');
});
