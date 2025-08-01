@extends('layouts.user')
@section('content')
@php use Carbon\Carbon; @endphp

<div class="w-full min-h-screen font-['Poppins']">
    <div class="w-full max-w-7xl mx-auto py-4 sm:py-6 lg:py-8">
        {{-- Header --}}
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-purple-950 mb-2">Edit Data Pendaftaran</h2>
            <p class="text-sm text-gray-600">Lengkapi dan perbarui informasi data pendaftaran</p>
        </div>

        {{-- Main Form Container --}}
        <form action="{{ route('pendaftar.update', $pendaftar->unique_id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl border border-gray-800/10 overflow-hidden">
            @csrf
            @method('PUT')
            
            <div class="p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8">
                    {{-- Left Column - Form Fields --}}
                    <div class="xl:col-span-2 space-y-6">
                        {{-- Registration Info (Read-only) --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Informasi Pendaftaran
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Tanggal Daftar</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->created_at ? Carbon::parse($pendaftar->created_at)->format('d/m/Y') : '-' }}" disabled>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Status Pendaftaran</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->status_label ?? '-' }}" disabled>
                                </div>
                            </div>
                        </div>

                        {{-- Child Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Anak
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Nama Anak (Read-only) --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Anak</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->Child->nama }}" disabled>
                                </div>
                                
                                {{-- NIK Anak --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="nik">
                                        NIK Anak <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="nik" id="nik" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('nik', $pendaftar->Child->NIK) }}" required>
                                </div>

                                {{-- Nama Panggilan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="nama_panggilan">Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" id="nama_panggilan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('nama_panggilan', $pendaftar->Child->nama_panggilan) }}">
                                </div>

                                {{-- Jenis Kelamin (Read-only) --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Jenis Kelamin</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->Child->jk == 'P' ? 'Perempuan' : ($pendaftar->Child->jk == 'L' ? 'Laki-laki' : '-') }}" disabled>
                                </div>

                                {{-- Tempat Lahir --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('tempat_lahir', $pendaftar->Child->tempat_lahir) }}">
                                </div>

                                {{-- Tanggal Lahir --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('tanggal_lahir', $pendaftar->Child->tanggal_lahir) }}">
                                </div>

                                {{-- Agama --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="agama">Agama</label>
                                    <input type="text" name="agama" id="agama" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('agama', $pendaftar->Child->agama) }}">
                                </div>

                                {{-- RT/RW --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">RT / RW</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <input type="text" name="RT" placeholder="RT" 
                                               class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                               value="{{ old('RT', $pendaftar->Child->RT) }}">
                                        <input type="text" name="RW" placeholder="RW" 
                                               class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                               value="{{ old('RW', $pendaftar->Child->RW) }}">
                                    </div>
                                </div>

                                {{-- Dusun --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="dusun">Dusun</label>
                                    <input type="text" name="dusun" id="dusun" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('dusun', $pendaftar->Child->dusun) }}">
                                </div>

                                {{-- Kelurahan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="kelurahan">Kelurahan</label>
                                    <input type="text" name="kelurahan" id="kelurahan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('kelurahan', $pendaftar->Child->kelurahan) }}">
                                </div>

                                {{-- Kecamatan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="kecamatan">Kecamatan</label>
                                    <input type="text" name="kecamatan" id="kecamatan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('kecamatan', $pendaftar->Child->kecamatan) }}">
                                </div>

                                {{-- Kode Pos --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="kode_pos">Kode Pos</label>
                                    <input type="text" name="kode_pos" id="kode_pos" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('kode_pos', $pendaftar->Child->kode_pos) }}">
                                </div>

                                {{-- Jenis Tinggal --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="jenis_tinggal">Jenis Tinggal</label>
                                    <input type="text" name="jenis_tinggal" id="jenis_tinggal" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('jenis_tinggal', $pendaftar->Child->jenis_tinggal) }}">
                                </div>

                                {{-- Alat Transportasi --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="alat_transportasi">Alat Transportasi</label>
                                    <input type="text" name="alat_transportasi" id="alat_transportasi" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('alat_transportasi', $pendaftar->Child->alat_transportasi) }}">
                                </div>

                                {{-- Physical Data --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="berat_badan">Berat Badan (kg)</label>
                                    <input type="number" name="berat_badan" id="berat_badan" step="0.1" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('berat_badan', $pendaftar->Child->berat_badan) }}">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="tinggi_badan">Tinggi Badan (cm)</label>
                                    <input type="number" name="tinggi_badan" id="tinggi_badan" step="0.1" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('tinggi_badan', $pendaftar->Child->tinggi_badan) }}">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="lingkar_kepala">Lingkar Kepala (cm)</label>
                                    <input type="number" name="lingkar_kepala" id="lingkar_kepala" step="0.1" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('lingkar_kepala', $pendaftar->Child->lingkar_kepala) }}">
                                </div>

                                {{-- Family Data --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="jumlah_saudara">Jumlah Saudara</label>
                                    <input type="number" name="jumlah_saudara" id="jumlah_saudara" min="0" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('jumlah_saudara', $pendaftar->Child->jumlah_saudara) }}">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="anak_keberapa">Anak Keberapa</label>
                                    <input type="number" name="anak_keberapa" id="anak_keberapa" min="1" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('anak_keberapa', $pendaftar->Child->anak_keberapa) }}">
                                </div>

                                {{-- Distance and Location --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="jarak_ke_sekolah">Jarak ke Sekolah (km)</label>
                                    <input type="number" name="jarak_ke_sekolah" id="jarak_ke_sekolah" step="0.01" min="0" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('jarak_ke_sekolah', $pendaftar->Child->jarak_ke_sekolah) }}">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="lintang">Lintang</label>
                                    <input type="text" name="lintang" id="lintang" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('lintang', $pendaftar->Child->lintang) }}">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="bujur">Bujur</label>
                                    <input type="text" name="bujur" id="bujur" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('bujur', $pendaftar->Child->bujur) }}">
                                </div>
                            </div>
                        </div>

                        {{-- Mother Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Ibu
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Nama Ibu (Read-only) --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Ibu</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->Child->Mom->name }}" disabled>
                                </div>

                                {{-- NIK Ibu --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_nik">NIK Ibu</label>
                                    <input type="text" name="ibu_nik" id="ibu_nik" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_nik', $pendaftar->Child->Mom->NIK ?? '') }}">
                                </div>

                                {{-- Tempat Lahir Ibu --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="ibu_tempat_lahir" id="ibu_tempat_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_tempat_lahir', $pendaftar->Child->Mom->tempat_lahir) }}">
                                </div>

                                {{-- Tanggal Lahir --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="ibu_tanggal_lahir" id="ibu_tanggal_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_tanggal_lahir', $pendaftar->Child->Mom->tanggal_lahir) }}">
                                </div>

                                {{-- Alamat Ibu --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_alamat">Alamat</label>
                                    <input type="text" name="ibu_alamat" id="ibu_alamat" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_alamat', $pendaftar->Child->Mom->alamat) }}">
                                </div>

                                {{-- No. Telp Ibu --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_no_telp">No. Telepon</label>
                                    <input type="text" name="ibu_no_telp" id="ibu_no_telp" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_no_telp', $pendaftar->Child->Mom->phone_number) }}">
                                </div>

                                {{-- Email Ibu --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_email">Email</label>
                                    <input type="email" name="ibu_email" id="ibu_email" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_email', $pendaftar->Child->Mom->email) }}">
                                </div>

                                {{-- Jenjang Pendidikan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_jenjang_pendidikan">Pendidikan</label>
                                    <input type="text" name="ibu_jenjang_pendidikan" id="ibu_jenjang_pendidikan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_jenjang_pendidikan', $pendaftar->Child->Mom->jenjang_pendidikan) }}">
                                </div>

                                {{-- Pekerjaan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_pekerjaan">Pekerjaan</label>
                                    <input type="text" name="ibu_pekerjaan" id="ibu_pekerjaan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_pekerjaan', $pendaftar->Child->Mom->pekerjaan) }}">
                                </div>

                                {{-- Penghasilan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ibu_penghasilan">Penghasilan</label>
                                    <input type="number" name="ibu_penghasilan" id="ibu_penghasilan" min="0" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ibu_penghasilan', $pendaftar->Child->Mom->penghasilan) }}">
                                </div>
                            </div>
                        </div>

                        {{-- Father Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Ayah
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Nama Ayah (Read-only) --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Ayah</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->Child->Dad->name }}" disabled>
                                </div>

                                {{-- NIK Ayah --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_nik">NIK Ayah</label>
                                    <input type="text" name="ayah_nik" id="ayah_nik" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_nik', $pendaftar->Child->Dad->NIK ?? '') }}">
                                </div>

                                {{-- Tempat Lahir Ayah --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="ayah_tempat_lahir" id="ayah_tempat_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_tempat_lahir', $pendaftar->Child->Dad->tempat_lahir) }}">
                                </div>

                                {{-- Tanggal Lahir --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="ayah_tanggal_lahir" id="ayah_tanggal_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_tanggal_lahir', $pendaftar->Child->Dad->tanggal_lahir) }}">
                                </div>

                                {{-- Alamat Ayah --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_alamat">Alamat</label>
                                    <input type="text" name="ayah_alamat" id="ayah_alamat" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_alamat', $pendaftar->Child->Dad->alamat) }}">
                                </div>

                                {{-- No. Telp Ayah --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_no_telp">No. Telepon</label>
                                    <input type="text" name="ayah_no_telp" id="ayah_no_telp" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_no_telp', $pendaftar->Child->Dad->phone_number) }}">
                                </div>

                                {{-- Email Ayah --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_email">Email</label>
                                    <input type="email" name="ayah_email" id="ayah_email" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_email', $pendaftar->Child->Dad->email) }}">
                                </div>

                                {{-- Jenjang Pendidikan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_jenjang_pendidikan">Pendidikan</label>
                                    <input type="text" name="ayah_jenjang_pendidikan" id="ayah_jenjang_pendidikan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_jenjang_pendidikan', $pendaftar->Child->Dad->jenjang_pendidikan) }}">
                                </div>

                                {{-- Pekerjaan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_pekerjaan">Pekerjaan</label>
                                    <input type="text" name="ayah_pekerjaan" id="ayah_pekerjaan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_pekerjaan', $pendaftar->Child->Dad->pekerjaan) }}">
                                </div>

                                {{-- Penghasilan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="ayah_penghasilan">Penghasilan</label>
                                    <input type="number" name="ayah_penghasilan" id="ayah_penghasilan" min="0" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('ayah_penghasilan', $pendaftar->Child->Dad->penghasilan) }}">
                                </div>
                            </div>
                        </div>

                        {{-- Guardian Data (if exists) --}}
                        @if($pendaftar->Child->Guardian)
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Wali
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Nama Wali (Read-only) --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama Wali</label>
                                    <input type="text" class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 cursor-not-allowed" 
                                           value="{{ $pendaftar->Child->Guardian->name }}" disabled>
                                </div>

                                {{-- NIK Wali --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="wali_nik">NIK Wali</label>
                                    <input type="text" name="wali_nik" id="wali_nik" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('wali_nik', $pendaftar->Child->Guardian->NIK ?? '') }}">
                                </div>

                                {{-- Tempat Lahir Wali --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="guardian_tempat_lahir" id="guardian_tempat_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_tempat_lahir', $pendaftar->Child->Guardian->tempat_lahir) }}">
                                </div>

                                {{-- Tanggal Lahir --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="guardian_tanggal_lahir" id="guardian_tanggal_lahir" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_tanggal_lahir', $pendaftar->Child->Guardian->tanggal_lahir) }}">
                                </div>

                                {{-- Alamat Wali --}}
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_alamat">Alamat</label>
                                    <input type="text" name="guardian_alamat" id="guardian_alamat" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_alamat', $pendaftar->Child->Guardian->alamat) }}">
                                </div>

                                {{-- No. Telp Wali --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_no_telp">No. Telepon</label>
                                    <input type="text" name="guardian_no_telp" id="guardian_no_telp" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_no_telp', $pendaftar->Child->Guardian->phone_number) }}">
                                </div>

                                {{-- Email Wali --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_email">Email</label>
                                    <input type="email" name="guardian_email" id="guardian_email" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_email', $pendaftar->Child->Guardian->email) }}">
                                </div>

                                {{-- Jenjang Pendidikan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_jenjang_pendidikan">Pendidikan</label>
                                    <input type="text" name="guardian_jenjang_pendidikan" id="guardian_jenjang_pendidikan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_jenjang_pendidikan', $pendaftar->Child->Guardian->jenjang_pendidikan) }}">
                                </div>

                                {{-- Pekerjaan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_pekerjaan">Pekerjaan</label>
                                    <input type="text" name="guardian_pekerjaan" id="guardian_pekerjaan" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_pekerjaan', $pendaftar->Child->Guardian->pekerjaan) }}">
                                </div>

                                {{-- Penghasilan --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="guardian_penghasilan">Penghasilan</label>
                                    <input type="number" name="guardian_penghasilan" id="guardian_penghasilan" min="0" 
                                           class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" 
                                           value="{{ old('guardian_penghasilan', $pendaftar->Child->Guardian->penghasilan) }}">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- Right Column - Documents --}}
                    <div class="xl:col-span-1 space-y-6">
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6 sticky top-4">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                Upload Dokumen
                            </h3>

                            {{-- Kartu Keluarga --}}
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="kartu_keluarga">
                                    Kartu Keluarga
                                </label>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="kartu_keluarga" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                                </svg>
                                                <p class="mb-2 text-xs text-gray-500 text-center">
                                                    <span class="font-semibold">Klik untuk upload</span> atau drag & drop
                                                </p>
                                                <p class="text-xs text-gray-500">PNG, JPG, atau PDF (Max. 5MB)</p>
                                            </div>
                                            <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="hidden" accept=".png,.jpg,.jpeg,.pdf">
                                        </label>
                                    </div>
                                    
                                    @if($pendaftar->Child->kartu_keluarga)
                                        @php
                                            $kkPath = 'storage/' . $pendaftar->Child->kartu_keluarga;
                                            $kkName = basename($pendaftar->Child->kartu_keluarga);
                                        @endphp
                                        <div class="p-3 bg-blue-50 border border-blue-200 rounded-lg">
                                            <p class="text-sm text-blue-800 mb-2">File saat ini:</p>
                                            <a href="{{ asset($kkPath) }}" download="{{ $kkName }}"
                                               class="inline-flex items-center text-sm text-blue-600 hover:text-blue-800 font-medium">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                                </svg>
                                                Download KK
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Akta Kelahiran --}}
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="akta_kelahiran">
                                    Akta Kelahiran
                                </label>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="akta_kelahiran" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                                </svg>
                                                <p class="mb-2 text-xs text-gray-500 text-center">
                                                    <span class="font-semibold">Klik untuk upload</span> atau drag & drop
                                                </p>
                                                <p class="text-xs text-gray-500">PNG, JPG, atau PDF (Max. 5MB)</p>
                                            </div>
                                            <input type="file" name="akta_kelahiran" id="akta_kelahiran" class="hidden" accept=".png,.jpg,.jpeg,.pdf">
                                        </label>
                                    </div>
                                    
                                    @if($pendaftar->Child->akta_kelahiran)
                                        @php
                                            $aktaPath = 'storage/' . $pendaftar->Child->akta_kelahiran;
                                            $aktaName = basename($pendaftar->Child->akta_kelahiran);
                                        @endphp
                                        <div class="p-3 bg-blue-50 border border-blue-200 rounded-lg">
                                            <p class="text-sm text-blue-800 mb-2">File saat ini:</p>
                                            <a href="{{ asset($aktaPath) }}" download="{{ $aktaName }}"
                                               class="inline-flex items-center text-sm text-blue-600 hover:text-blue-800 font-medium">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                                </svg>
                                                Download Akta
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Upload Instructions --}}
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 rounded-r-lg">
                                <div class="flex items-start">
                                    <svg class="w-4 h-4 text-yellow-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <div>
                                        <h4 class="text-sm font-medium text-yellow-800">Catatan Upload</h4>
                                        <p class="text-xs text-yellow-700 mt-1">Upload file baru hanya jika ingin mengganti dokumen yang sudah ada. File lama akan diganti dengan file baru.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t border-gray-200 justify-end">
                    <button type="submit" 
                            class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('detail-pendaftaran', $pendaftar->unique_id) }}" 
                       class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Custom Styles for Form Optimization --}}
<style>
/* Ensure proper spacing on mobile */
@media (max-width: 640px) {
    .grid.grid-cols-2 {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .sm\:col-span-2 {
        grid-column: span 1;
    }
}

/* File input hover effects */
input[type="file"]:focus + label,
label:hover {
    border-color: #8B5CF6;
    background-color: #F3F4F6;
}

/* Focus states for better accessibility */
input:focus,
select:focus,
textarea:focus {
    outline: none;
    ring: 2px solid #8B5CF6;
    border-color: transparent;
}

/* Loading state for submit button */
button[type="submit"]:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

/* Smooth transitions */
* {
    transition: all 0.2s ease;
}
</style>

{{-- JavaScript for enhanced UX --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // File input preview functionality
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const label = e.target.nextElementSibling || e.target.parentElement.querySelector('label');
            
            if (file) {
                const fileName = file.name;
                const fileSize = (file.size / (1024 * 1024)).toFixed(2);
                
                // Update label text to show selected file
                const textElement = label.querySelector('p');
                if (textElement) {
                    textElement.innerHTML = `<span class="font-semibold text-green-600">File dipilih:</span><br><span class="text-xs">${fileName} (${fileSize} MB)</span>`;
                }
            }
        });
    });

    // Form validation before submit
    const form = document.querySelector('form');
    const submitBtn = form.querySelector('button[type="submit"]');
    
    form.addEventListener('submit', function(e) {
        // Add loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Menyimpan...
        `;
    });

    // Auto-format number inputs
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        input.addEventListener('blur', function(e) {
            if (e.target.name.includes('penghasilan') && e.target.value) {
                // Format currency display (optional)
                const value = parseInt(e.target.value);
                if (!isNaN(value)) {
                    e.target.title = `Rp ${value.toLocaleString('id-ID')}`;
                }
            }
        });
    });
});
</script>
@endsection