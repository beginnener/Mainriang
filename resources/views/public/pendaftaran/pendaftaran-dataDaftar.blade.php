@extends('layouts.pendaftaran')
@section('content')
<x-title title="Input Data Pendaftaran" />
<div class="w-full flex flex-col py-6 gap-6">
    <!-- Form -->
    <div class="w-full max-w-6xl mx-auto px-8">
        <form action="{{ route('daftar') }}" class="flex flex-col gap-4" method="POST">
            @csrf
            <!-- Nomor Telepon -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="phone_number" class="font-['Poppins'] text-left md:text-right px-2">No Telpon Aktif</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="tel" id="phone_number" name="phone_number" required class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="No Telpon" pattern="[0-9]+" maxlength="15">
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="email" class="font-['Poppins'] text-left md:text-right px-2">Email Aktif</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="email" id="email" name="email" required class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Email" maxlength="255">
                </div>
            </div>
    </div>
    <x-title title="Data Anak" />
    <div class="w-full max-w-6xl flex flex-col gap-4 mx-auto px-8">
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="nama" class="font-['Poppins'] text-left md:text-right px-2">Nama Lengkap</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="nama" name="nama" required class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap anak" maxlength="100">
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="nama_panggilan" class="font-['Poppins'] text-left md:text-right px-2">Nama Panggilan</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="nama_panggilan" name="nama_panggilan" required class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama panggilan anak" maxlength="50">
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="tempat_lahir" class="font-['Poppins'] text-left md:text-right px-2">Tempat Lahir</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan tempat lahir" maxlength="100">
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="tanggal_lahir" class="font-['Poppins'] text-left md:text-right px-2">Tanggal Lahir</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required class="w-full md:w-1/2 lg:w-1/3 py-3 px-4 font-['Poppins'] text-left text-gray-700 bg-zinc-200 border-none rounded-full">
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="jk" class="font-['Poppins'] text-left md:text-right px-2">Jenis Kelamin</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2 gap-4">
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="laki-laki" name="jk" value="L" required>
                        Laki-laki
                    </label>
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="perempuan" name="jk" value="P" required>
                        Perempuan
                    </label>
                </div>
            </div>
            
            <div class="mt-4 mb-2 mx-auto flex justify-center items-center">
                <button type="submit" class="inline-flex items-center justify-center w-full md:w-auto px-8 py-3 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg font-bold text-center transition hover:shadow-none hover:translate-y-1">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection