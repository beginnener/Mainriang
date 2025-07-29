@extends('layouts.user')
@section('content')
@php use Carbon\Carbon; @endphp
<div class="p-4 lg:p-8 w-full max-w-6xl mx-auto font-['Poppins']">
    <h2 class="mb-3 text-xl lg:text-2xl font-semibold text-purple-950 text-left">Edit Data Pendaftaran</h2>
    <form action="{{ route('pendaftar.update', $pendaftar->unique_id) }}" method="POST" enctype="multipart/form-data" class="p-4 lg:p-8 border-2 border-purple-950 rounded-xl bg-white">
        @csrf
        @method('PUT')
        <div class="flex flex-col lg:flex-row gap-8 items-start">
            {{-- Kiri: Data Pendaftar --}}
            <div class="w-full lg:w-1/2">
                {{-- Informasi Pendaftaran --}}
                <div class="mb-6">
                    <label class="block font-semibold mb-1">Tanggal Daftar</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->created_at ? Carbon::parse($pendaftar->created_at)->format('d/m/Y') : '-' }}" disabled>
                </div>
                <div class="mb-6">
                    <label class="block font-semibold mb-1">Status Pendaftaran</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->status_label ?? '-' }}" disabled>
                </div>

                {{-- Data Anak --}}
                <h3 class="mt-3 mb-2 text-xl font-semibold text-purple-950 text-left">Data Anak</h3>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Anak</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->Child->nama }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">NIK Anak</label>
                    <input type="text" name="nik" class="w-full rounded border px-3 py-2" value="{{ old('nik', $pendaftar->Child->NIK) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Panggilan</label>
                    <input type="text" name="nama_panggilan" class="w-full rounded border px-3 py-2" value="{{ old('nama_panggilan', $pendaftar->Child->nama_panggilan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jenis Kelamin</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->Child->jk == 'P' ? 'Perempuan' : ($pendaftar->Child->jk == 'L' ? 'Laki-laki' : '-') }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="w-full rounded border px-3 py-2" value="{{ old('tempat_lahir', $pendaftar->Child->tempat_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="w-full rounded border px-3 py-2" value="{{ old('tanggal_lahir', $pendaftar->Child->tanggal_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Agama</label>
                    <input type="text" name="agama" class="w-full rounded border px-3 py-2" value="{{ old('agama', $pendaftar->Child->agama) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">RT/RW</label>
                    <div class="flex gap-2">
                        <input type="text" name="RT" class="w-1/2 rounded border px-3 py-2" value="{{ old('RT', $pendaftar->Child->RT) }}">
                        <input type="text" name="RW" class="w-1/2 rounded border px-3 py-2" value="{{ old('RW', $pendaftar->Child->RW) }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Dusun</label>
                    <input type="text" name="dusun" class="w-full rounded border px-3 py-2" value="{{ old('dusun', $pendaftar->Child->dusun) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Kelurahan</label>
                    <input type="text" name="kelurahan" class="w-full rounded border px-3 py-2" value="{{ old('kelurahan', $pendaftar->Child->kelurahan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Kecamatan</label>
                    <input type="text" name="kecamatan" class="w-full rounded border px-3 py-2" value="{{ old('kecamatan', $pendaftar->Child->kecamatan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Kode Pos</label>
                    <input type="text" name="kode_pos" class="w-full rounded border px-3 py-2" value="{{ old('kode_pos', $pendaftar->Child->kode_pos) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jenis Tinggal</label>
                    <input type="text" name="jenis_tinggal" class="w-full rounded border px-3 py-2" value="{{ old('jenis_tinggal', $pendaftar->Child->jenis_tinggal) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Alat Transportasi</label>
                    <input type="text" name="alat_transportasi" class="w-full rounded border px-3 py-2" value="{{ old('alat_transportasi', $pendaftar->Child->alat_transportasi) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Berat Badan (kg)</label>
                    <input type="number" name="berat_badan" class="w-full rounded border px-3 py-2" value="{{ old('berat_badan', $pendaftar->Child->berat_badan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi_badan" class="w-full rounded border px-3 py-2" value="{{ old('tinggi_badan', $pendaftar->Child->tinggi_badan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Lingkar Kepala (cm)</label>
                    <input type="number" name="lingkar_kepala" class="w-full rounded border px-3 py-2" value="{{ old('lingkar_kepala', $pendaftar->Child->lingkar_kepala) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jumlah Saudara</label>
                    <input type="number" name="jumlah_saudara" class="w-full rounded border px-3 py-2" value="{{ old('jumlah_saudara', $pendaftar->Child->jumlah_saudara) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Anak Keberapa</label>
                    <input type="number" name="anak_keberapa" class="w-full rounded border px-3 py-2" value="{{ old('anak_keberapa', $pendaftar->Child->anak_keberapa) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jarak ke Sekolah (km)</label>
                    <input type="number" step="0.01" name="jarak_ke_sekolah" class="w-full rounded border px-3 py-2" value="{{ old('jarak_ke_sekolah', $pendaftar->Child->jarak_ke_sekolah) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Lintang</label>
                    <input type="text" name="lintang" class="w-full rounded border px-3 py-2" value="{{ old('lintang', $pendaftar->Child->lintang) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Bujur</label>
                    <input type="text" name="bujur" class="w-full rounded border px-3 py-2" value="{{ old('bujur', $pendaftar->Child->bujur) }}">
                </div>

                {{-- Data Ibu --}}
                <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950 text-left">Data Ibu</h3>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ibu</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->Child->Mom->name }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">NIK Ibu</label>
                    <input type="text" name="ibu_nik" class="w-full rounded border px-3 py-2" value="{{ old('ibu_nik', $pendaftar->Child->Mom->NIK ?? '') }}">
                </div>

                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tanggal Lahir</label>
                    <input type="date" name="ibu_tanggal_lahir" class="w-full rounded border px-3 py-2" value="{{ old('ibu_tanggal_lahir', $pendaftar->Child->Mom->tanggal_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jenjang Pendidikan</label>
                    <input type="text" name="ibu_jenjang_pendidikan" class="w-full rounded border px-3 py-2" value="{{ old('ibu_jenjang_pendidikan', $pendaftar->Child->Mom->jenjang_pendidikan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Pekerjaan</label>
                    <input type="text" name="ibu_pekerjaan" class="w-full rounded border px-3 py-2" value="{{ old('ibu_pekerjaan', $pendaftar->Child->Mom->pekerjaan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Penghasilan</label>
                    <input type="number" name="ibu_penghasilan" class="w-full rounded border px-3 py-2" value="{{ old('ibu_penghasilan', $pendaftar->Child->Mom->penghasilan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Alamat Ibu</label>
                    <input type="text" name="ibu_alamat" class="w-full rounded border px-3 py-2" value="{{ old('ibu_alamat', $pendaftar->Child->Mom->alamat) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tempat Lahir Ibu</label>
                    <input type="text" name="ibu_tempat_lahir" class="w-full rounded border px-3 py-2" value="{{ old('ibu_tempat_lahir', $pendaftar->Child->Mom->tempat_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">No. Telp Ibu</label>
                    <input type="text" name="ibu_no_telp" class="w-full rounded border px-3 py-2" value="{{ old('ibu_no_telp', $pendaftar->Child->Mom->phone_number) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Email Ibu</label>
                    <input type="email" name="ibu_email" class="w-full rounded border px-3 py-2" value="{{ old('ibu_email', $pendaftar->Child->Mom->email) }}">
                </div>

                {{-- Data Ayah --}}
                <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950 text-left">Data Ayah</h3>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ayah</label>
                    <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->Child->Dad->name }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">NIK Ayah</label>
                    <input type="text" name="ayah_nik" class="w-full rounded border px-3 py-2" value="{{ old('ayah_nik', $pendaftar->Child->Dad->NIK ?? '') }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tanggal Lahir</label>
                    <input type="date" name="ayah_tanggal_lahir" class="w-full rounded border px-3 py-2" value="{{ old('ayah_tanggal_lahir', $pendaftar->Child->Dad->tanggal_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Jenjang Pendidikan</label>
                    <input type="text" name="ayah_jenjang_pendidikan" class="w-full rounded border px-3 py-2" value="{{ old('ayah_jenjang_pendidikan', $pendaftar->Child->Dad->jenjang_pendidikan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Pekerjaan</label>
                    <input type="text" name="ayah_pekerjaan" class="w-full rounded border px-3 py-2" value="{{ old('ayah_pekerjaan', $pendaftar->Child->Dad->pekerjaan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Penghasilan</label>
                    <input type="number" name="ayah_penghasilan" class="w-full rounded border px-3 py-2" value="{{ old('ayah_penghasilan', $pendaftar->Child->Dad->penghasilan) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Alamat Ayah</label>
                    <input type="text" name="ayah_alamat" class="w-full rounded border px-3 py-2" value="{{ old('ayah_alamat', $pendaftar->Child->Dad->alamat) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Tempat Lahir Ayah</label>
                    <input type="text" name="ayah_tempat_lahir" class="w-full rounded border px-3 py-2" value="{{ old('ayah_tempat_lahir', $pendaftar->Child->Dad->tempat_lahir) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">No. Telp Ayah</label>
                    <input type="text" name="ayah_no_telp" class="w-full rounded border px-3 py-2" value="{{ old('ayah_no_telp', $pendaftar->Child->Dad->phone_number) }}">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Email Ayah</label>
                    <input type="email" name="ayah_email" class="w-full rounded border px-3 py-2" value="{{ old('ayah_email', $pendaftar->Child->Dad->email) }}">
                </div>

                {{-- Data Wali (jika ada) --}}
                @if($pendaftar->Child->Guardian)
                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950 text-left">Data Wali</h3>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Nama Wali</label>
                        <input type="text" class="w-full rounded border px-3 py-2 bg-gray-100" value="{{ $pendaftar->Child->Guardian->name }}" disabled>
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">NIK Wali</label>
                        <input type="text" name="wali_nik" class="w-full rounded border px-3 py-2" value="{{ old('wali_nik', $pendaftar->Child->Guardian->NIK ?? '') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Tanggal Lahir</label>
                        <input type="date" name="guardian_tanggal_lahir" class="w-full rounded border px-3 py-2" value="{{ old('guardian_tanggal_lahir', $pendaftar->Child->Guardian->tanggal_lahir) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Jenjang Pendidikan</label>
                        <input type="text" name="guardian_jenjang_pendidikan" class="w-full rounded border px-3 py-2" value="{{ old('guardian_jenjang_pendidikan', $pendaftar->Child->Guardian->jenjang_pendidikan) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Pekerjaan</label>
                        <input type="text" name="guardian_pekerjaan" class="w-full rounded border px-3 py-2" value="{{ old('guardian_pekerjaan', $pendaftar->Child->Guardian->pekerjaan) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Penghasilan</label>
                        <input type="number" name="guardian_penghasilan" class="w-full rounded border px-3 py-2" value="{{ old('guardian_penghasilan', $pendaftar->Child->Guardian->penghasilan) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Alamat Wali</label>
                        <input type="text" name="guardian_alamat" class="w-full rounded border px-3 py-2" value="{{ old('guardian_alamat', $pendaftar->Child->Guardian->alamat) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Tempat Lahir Wali</label>
                        <input type="text" name="guardian_tempat_lahir" class="w-full rounded border px-3 py-2" value="{{ old('guardian_tempat_lahir', $pendaftar->Child->Guardian->tempat_lahir) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">No. Telp Wali</label>
                        <input type="text" name="guardian_no_telp" class="w-full rounded border px-3 py-2" value="{{ old('guardian_no_telp', $pendaftar->Child->Guardian->phone_number) }}">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Email Wali</label>
                        <input type="email" name="guardian_email" class="w-full rounded border px-3 py-2" value="{{ old('guardian_email', $pendaftar->Child->Guardian->email) }}">
                    </div>
                    @endif
            </div>

            {{-- Kanan: Bukti & Dokumen --}}
            <div class="w-full lg:w-1/2 flex flex-col gap-6 mt-6 lg:mt-0">
                @php
                    $bukti = 'storage/' . $pendaftar->bukti_pembayaran;
                    $kk = 'storage/' . $pendaftar->Child->kartu_keluarga;
                    $akta = 'storage/' . $pendaftar->Child->akta_kelahiran;
                @endphp
        

                {{-- Kartu Keluarga --}}
                <div>
                    <h3 class="text-lg font-semibold text-purple-950 text-left">Kartu Keluarga</h3>
                    <input type="file" name="kartu_keluarga" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 mb-2">
                    @if($pendaftar->Child->kartu_keluarga)
                        <a href="{{ asset($kk) }}" download
                           class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                            Download Kartu Keluarga
                        </a>
                    @endif
                </div>

                {{-- Akta Kelahiran --}}
                <div>
                    <h3 class="text-lg font-semibold text-purple-950 text-left">Akta Kelahiran</h3>
                    <input type="file" name="akta_kelahiran" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 mb-2">
                    @if($pendaftar->Child->akta_kelahiran)
                        <a href="{{ asset($akta) }}" download
                           class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                            Download Akta Kelahiran
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-3 mt-8 justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan Perubahan</button>
            <a href="{{ route('detail-pendaftaran', $pendaftar->unique_id) }}" class="px-6 py-2 bg-gray-400 text-white rounded hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection