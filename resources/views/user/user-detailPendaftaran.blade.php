@extends('layouts.user')
@section('content')
@php use Carbon\Carbon; @endphp

<div class="w-full min-h-screen font-['Poppins']">
    <div class="w-full max-w-7xl mx-auto py-4 sm:py-6 lg:py-8">
        {{-- Header --}}
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-purple-950 mb-2">Detail Pendaftaran</h2>
            <p class="text-sm text-gray-600">Informasi lengkap data pendaftaran dan berkas</p>
        </div>

        {{-- Main Container --}}
        <div class="bg-white rounded-xl border border-gray-800/10 overflow-hidden">
            <div class="p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8">
                    {{-- Left Column - Data Tables --}}
                    <div class="xl:col-span-2 space-y-6">
                        {{-- Status Notice --}}
                        @if($pendaftar->status == 6)
                            <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-r-lg">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-yellow-400 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <div>
                                        <h4 class="text-sm font-semibold text-yellow-800">Perhatian</h4>
                                        <p class="text-sm text-yellow-700 mt-1">Silahkan lengkapi data dengan menekan tombol <strong>Edit Data</strong> yang ada di bawah halaman.</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Registration Info --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Informasi Pendaftaran
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Tanggal Daftar</label>
                                    <p class="text-sm text-gray-900 mt-1">{{ $pendaftar->created_at ? \Carbon\Carbon::parse($pendaftar->created_at)->format('d/m/Y') : '-' }}</p>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Status Pendaftaran</label>
                                    <div class="mt-1">
                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full
                                            @if($pendaftar->status == 1) bg-yellow-100 text-yellow-800
                                            @elseif($pendaftar->status == 2) bg-blue-100 text-blue-800
                                            @elseif($pendaftar->status == 3) bg-green-100 text-green-800
                                            @elseif($pendaftar->status == 4) bg-purple-100 text-purple-800
                                            @elseif($pendaftar->status == 6) bg-orange-100 text-orange-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ $pendaftar->status_label ?? '-' }}
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Lokasi</label>
                                    <p class="text-sm text-gray-900 mt-1">{{ $pendaftar->rombel->location->name ?? '-' }}</p>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Program</label>
                                    <p class="text-sm text-gray-900 mt-1">{{ $pendaftar->rombel->program->name ?? '-' }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Child Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Anak
                            </h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <tbody class="space-y-2">
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600 w-1/3">Nama Lengkap</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->nama }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Nama Panggilan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->nama_panggilan }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Jenis Kelamin</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->jk == 'P' ? 'Perempuan' : ($pendaftar->Child->jk == 'L' ? 'Laki-laki' : '-') }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Tempat, Tanggal Lahir</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->tempat_lahir }}, {{ \Carbon\Carbon::parse($pendaftar->Child->tanggal_lahir)->format('d/m/Y') }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Agama</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->agama }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Alamat</td>
                                            <td class="py-2 text-gray-900">
                                                RT {{ str_pad($pendaftar->Child->RT, 3, '0', STR_PAD_LEFT) }}/RW {{ str_pad($pendaftar->Child->RW, 3, '0', STR_PAD_LEFT) }}, 
                                                Dusun {{ $pendaftar->Child->dusun }}, 
                                                Kel. {{ $pendaftar->Child->kelurahan }}, 
                                                Kec. {{ $pendaftar->Child->kecamatan }}, 
                                                {{ $pendaftar->Child->kode_pos }}
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Jenis Tinggal</td>
                                            <td class="py-2 text-gray-900">{{ str_replace('_', ' ', $pendaftar->Child->jenis_tinggal) }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Alat Transportasi</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->alat_transportasi }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Fisik</td>
                                            <td class="py-2 text-gray-900">
                                                BB: {{ $pendaftar->Child->berat_badan }} kg, 
                                                TB: {{ $pendaftar->Child->tinggi_badan }} cm, 
                                                LK: {{ $pendaftar->Child->lingkar_kepala }} cm
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Keluarga</td>
                                            <td class="py-2 text-gray-900">Anak ke-{{ $pendaftar->Child->anak_keberapa }} dari {{ $pendaftar->Child->jumlah_saudara }} bersaudara</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Jarak ke Sekolah</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->jarak_ke_sekolah }} km</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-600">Koordinat</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->lintang }}, {{ $pendaftar->Child->bujur }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Mother Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Ibu
                            </h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <tbody>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600 w-1/3">Nama</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Mom->name ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Alamat</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Mom->alamat ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Tempat, Tanggal Lahir</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Mom->tempat_lahir ?? '-' }}{{ optional($pendaftar->Child->Mom)->tanggal_lahir ? ', ' . \Carbon\Carbon::parse($pendaftar->Child->Mom->tanggal_lahir)->format('d/m/Y') : '' }}
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Kontak</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Mom->phone_number ?? '-' }}
                                                @if($pendaftar->Child->Mom->email)
                                                    <br><span class="text-xs text-gray-600">{{ $pendaftar->Child->Mom->email }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pendidikan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Mom->jenjang_pendidikan ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pekerjaan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Mom->pekerjaan ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-600">Penghasilan</td>
                                            <td class="py-2 text-gray-900">
                                                @php $penghasilan = optional($pendaftar->Child->Mom)->penghasilan; @endphp
                                                {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Father Data --}}
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Ayah
                            </h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <tbody>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600 w-1/3">Nama</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Dad->name ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Alamat</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Dad->alamat ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Tempat, Tanggal Lahir</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Dad->tempat_lahir ?? '-' }}{{ optional($pendaftar->Child->Dad)->tanggal_lahir ? ', ' . \Carbon\Carbon::parse($pendaftar->Child->Dad->tanggal_lahir)->format('d/m/Y') : '' }}
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Kontak</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Dad->phone_number ?? '-' }}
                                                @if($pendaftar->Child->Dad->email)
                                                    <br><span class="text-xs text-gray-600">{{ $pendaftar->Child->Dad->email }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pendidikan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Dad->jenjang_pendidikan ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pekerjaan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Dad->pekerjaan ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-600">Penghasilan</td>
                                            <td class="py-2 text-gray-900">
                                                @php $penghasilan = optional($pendaftar->Child->Dad)->penghasilan; @endphp
                                                {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Guardian Data (if exists) --}}
                        @if($pendaftar->Child->Guardian)
                        <div class="bg-gray-50 rounded-lg p-4 sm:p-6">
                            <h3 class="text-lg font-semibold text-purple-950 mb-4 flex items-center">
                                Data Wali
                            </h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <tbody>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600 w-1/3">Nama</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Guardian->name ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Alamat</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Guardian->alamat ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Tempat, Tanggal Lahir</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Guardian->tempat_lahir ?? '-' }}{{ optional($pendaftar->Child->Guardian)->tanggal_lahir ? ', ' . \Carbon\Carbon::parse($pendaftar->Child->Guardian->tanggal_lahir)->format('d/m/Y') : '' }}
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Kontak</td>
                                            <td class="py-2 text-gray-900">
                                                {{ $pendaftar->Child->Guardian->phone_number ?? '-' }}
                                                @if($pendaftar->Child->Guardian->email)
                                                    <br><span class="text-xs text-gray-600">{{ $pendaftar->Child->Guardian->email }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pendidikan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Guardian->jenjang_pendidikan ?? '-' }}</td>
                                        </tr>
                                        <tr class="border-b border-gray-200">
                                            <td class="py-2 font-medium text-gray-600">Pekerjaan</td>
                                            <td class="py-2 text-gray-900">{{ $pendaftar->Child->Guardian->pekerjaan ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-600">Penghasilan</td>
                                            <td class="py-2 text-gray-900">
                                                @php $penghasilan = optional($pendaftar->Child->Guardian)->penghasilan; @endphp
                                                {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                Dokumen Berkas
                            </h3>

                            {{-- Kartu Keluarga --}}
                            <div class="mb-6">
                                <h4 class="font-medium text-gray-700 mb-3">Kartu Keluarga</h4>
                                @if($pendaftar->Child->kartu_keluarga)
                                    @php
                                        $kkPath = 'storage/' . $pendaftar->Child->kartu_keluarga;
                                        $kkName = basename($pendaftar->Child->kartu_keluarga);
                                    @endphp
                                    @if(Str::endsWith(strtolower($kkPath), ['.pdf']))
                                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                            <svg class="w-12 h-12 text-red-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                            <p class="text-sm text-gray-600 mb-3">File PDF</p>
                                        </div>
                                    @else
                                        <img src="{{ asset($kkPath) }}" alt="Kartu Keluarga" class="w-full rounded-lg shadow-sm border mb-3">
                                    @endif
                                    <a href="{{ asset($kkPath) }}" download="{{ $kkName }}"
                                       class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium bg-gradient-to-r from-orange-400 to-amber-400 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                        </svg>
                                        Download KK
                                    </a>
                                @else
                                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                        <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <p class="text-sm text-gray-500">Belum ada file</p>
                                    </div>
                                @endif
                            </div>

                            {{-- Akta Kelahiran --}}
                            <div>
                                <h4 class="font-medium text-gray-700 mb-3">Akta Kelahiran</h4>
                                @if($pendaftar->Child->akta_kelahiran)
                                    @php
                                        $aktaPath = 'storage/' . $pendaftar->Child->akta_kelahiran;
                                        $aktaName = basename($pendaftar->Child->akta_kelahiran);
                                    @endphp
                                    @if(Str::endsWith(strtolower($aktaPath), ['.pdf']))
                                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                            <svg class="w-12 h-12 text-red-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                            <p class="text-sm text-gray-600 mb-3">File PDF</p>
                                        </div>
                                    @else
                                        <img src="{{ asset($aktaPath) }}" alt="Akta Kelahiran" class="w-full rounded-lg shadow-sm border mb-3">
                                    @endif
                                    <a href="{{ asset($aktaPath) }}" download="{{ $aktaName }}"
                                       class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                        </svg>
                                        Download Akta
                                    </a>
                                @else
                                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                        <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <p class="text-sm text-gray-500">Belum ada file</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t border-gray-200 justify-end">
                    @if($pendaftar->status == 6)
                        <a href="{{ route('pendaftar.edit', $pendaftar->unique_id) }}"
                           class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Data
                        </a>
                    @endif
                    <a href="{{ route('dashboard') }}" 
                       class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Custom Styles for Mobile Table Optimization --}}
<style>
@media (max-width: 640px) {
    table td:first-child {
        width: 40%;
        font-size: 0.8rem;
    }
    
    table td:last-child {
        font-size: 0.85rem;
    }
    
    .transform:hover {
        transform: none;
    }
}

@media (max-width: 768px) {
    .hover\:scale-105:hover {
        transform: none;
    }
}
</style>
@endsection