@extends('layouts.admin')
@section('content')
<div class="flex flex-row font-['Poppins']">
    @include('components.admin-sidenav')
    <div class="p-8 w-full">
        <h2 class="mb-3 text-2xl font-semibold text-purple-950">Detail Pendaftaran</h2>
        <div class="p-8 border-2 border-purple-950 rounded-xl">
            <div class="flex flex-row w-full">
                <div class="w-1/2">
                    {{-- informasi pendaftaran --}}
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Daftar</td>
                            <td class="px-4 py-2 border border-gray-600">00/00/0000</td>
                        </tr>
                        <tr class="items-center">
                            <td class="px-4 py-2 font-semibold border border-gray-600">Status Pendaftaran</td>
                            <td class="w-full px-4 py-2 border border-gray-600"> 
                                <div class="px-4 py-2 text-center bg-blue-200 rounded-lg">
                                    ongoing
                                </div>
                            </td>
                        </tr>
                    </table>

                    {{-- informasi data anak --}}
                    <h3 class="mt-3 mb-2 text-xl font-semibold text-purple-950">Data Anak</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="flex-1 px-4 py-2 font-semibold border border-gray-600">Nama Anak</td>
                            <td class="w-full px-4 py-2 border border-gray-600">Ahmad Firdaus</td>
                        </tr>
                        <tr>
                            <td class="flex-1 px-4 py-2 font-semibold border border-gray-600">Nama Panggilan</td>
                            <td class="w-full px-4 py-2 border border-gray-600">Firdaus</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenis Kelamin</td>
                            <td class="px-4 py-2 border border-gray-600">Laki-laki</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">Jakarta</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">15/03/2020</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Agama</td>
                            <td class="px-4 py-2 border border-gray-600">Islam</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">RT/RW</td>
                            <td class="px-4 py-2 border border-gray-600">03/05</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Dusun</td>
                            <td class="px-4 py-2 border border-gray-600">Mawar</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kelurahan</td>
                            <td class="px-4 py-2 border border-gray-600">Cempaka Putih</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kecamatan</td>
                            <td class="px-4 py-2 border border-gray-600">Cempaka Putih</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kode Pos</td>
                            <td class="px-4 py-2 border border-gray-600">10570</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenis Tinggal</td>
                            <td class="px-4 py-2 border border-gray-600">Bersama Orang Tua</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Alat Transportasi</td>
                            <td class="px-4 py-2 border border-gray-600">Kendaraan Pribadi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Berat Badan</td>
                            <td class="px-4 py-2 border border-gray-600">18 kg</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tinggi Badan</td>
                            <td class="px-4 py-2 border border-gray-600">105 cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Lingkar Kepala</td>
                            <td class="px-4 py-2 border border-gray-600">50 cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jumlah Saudara</td>
                            <td class="px-4 py-2 border border-gray-600">2</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Anak Keberapa</td>
                            <td class="px-4 py-2 border border-gray-600">2</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jarak ke Sekolah</td>
                            <td class="px-4 py-2 border border-gray-600">2.5 km</td>
                        </tr>
                    </table>

                    {{-- informasi data ortu --}}
                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Ibu</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Ibu</td>
                            <td class="w-full px-4 py-2 border border-gray-600">Siti Nurhaliza</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">Bandung</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">12/05/1990</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">S1 - Sarjana</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">Guru</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            <td class="px-4 py-2 border border-gray-600">Rp 5.000.000</td>
                        </tr>
                    </table>

                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Ayah</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Ayah</td>
                            <td class="w-full px-4 py-2 border border-gray-600">Ahmad Subagja</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">Jakarta</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">08/11/1988</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">S1 - Sarjana</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">Karyawan Swasta</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            <td class="px-4 py-2 border border-gray-600">Rp 8.000.000</td>
                        </tr>
                    </table>

                    {{-- informasi data wali (jika ada) --}}
                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Wali</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Wali</td>
                            <td class="w-full px-4 py-2 border border-gray-600">Budi Santoso</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">Surabaya</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">15/07/1985</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">SMA</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">Wiraswasta</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            <td class="px-4 py-2 border border-gray-600">Rp 6.500.000</td>
                        </tr>
                    </table>
                </div>

                {{-- menampilkan foto foto bukti pembayaran --}}
                <div class="ml-8 w-1/2">
                    <div class="mb-3">
                        <h3 class="text-lg font-semibold text-purple-950">Bukti Pembayaran</h3>
                        <img src="{{ asset('uploads/bukti_pembayaran/NON890010203NF_bukti_pembayaran.png') }}" alt="">
                    </div>
                    <div class="mb-3">
                        <h3 class="text-lg font-semibold text-purple-950">Kartu Keluarga</h3>
                        <img src="{{ asset('uploads/bukti_pembayaran/NON890010203NF_bukti_pembayaran.png') }}" alt="">
                    </div>
                    <div class="mb-3">
                        <h3 class="text-lg font-semibold text-purple-950">Akta Kelahiran</h3>
                        <img src="{{ asset('uploads/bukti_pembayaran/NON890010203NF_bukti_pembayaran.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="buttons flex flex-row gap-3 mt-4 justify-end">
                {{-- Tombol Terima dan Tolak --}}
                {{-- Hanya tampil jika status pendaftaran adalah 2, 5, 6, atau 8 --}}
                {{-- <form action="{{ route('pendaftar.terima', $pendaftar->id) }}" method="POST"> --}}
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="px-4 py-2 bg-[#00BD03] text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                        Terima
                    </button>
                {{-- </form> --}}

                {{-- <form action="{{ route('pendaftar.tolak', $pendaftar->id) }}" method="POST"> --}}
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="px-4 py-2 bg-[#FF0000] text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 cursor-pointer">
                        Tolak
                    </button>
                {{-- </form> --}}
                    <a href="{{ url()->previous() }}" class="px-4 py-2 bg-gray-500 text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-gray-700 cursor-pointer">
                        Kembali
                    </a>
            </div>
        </div>
    </div>
</div>
@endsection