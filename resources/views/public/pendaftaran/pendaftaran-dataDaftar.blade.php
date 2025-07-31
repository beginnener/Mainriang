@extends('layouts.pendaftaran')
<!-- Judul -->
@section('title','Input Data Pendaftaran')
@section('content')
<div class="w-full flex flex-col pt-6 pb-10 gap-6">
    <!-- Form -->
    <div class="w-4/5 mx-auto">
        <form action="{{ route('daftar') }}" class="flex flex-col gap-4" method="POST">
            @csrf
            <!-- Nama Lengkap -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="phone_number" class="font-['Poppins'] text-right px-2">No Telpon Aktif</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="phone_number" name="phone_number" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="No Telpon" required>
                </div>
            </div>
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="phone_number" class="font-['Poppins'] text-right px-2">Email Aktif</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="email" name="email" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Email" required>
                </div>
            </div>
    </div>
    <div class="w-full flex pt-4">
        <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex items-center">
            <span class="ml-48 font-['Fredoka'] font-semibold text-purple-950 text-3xl" >
                Data Anak
            </span>
        </div>
    </div>
    <div class="w-4/5 mx-auto flex flex-col gap-4">
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama" class="font-['Poppins'] text-right px-2">Nama Lengkap</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama" name="nama" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap anak" required>
                </div>
            </div>
            <!-- Nama Panggilan -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_panggilan" class="font-['Poppins'] text-right px-2">Nama Panggilan</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_panggilan" name="nama_panggilan" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama panggilan anak" required>
                </div>
            </div>
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="tempat_lahir" class="font-['Poppins'] text-right px-2">Tempat Lahir</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan tempat lahir" required>
                </div>
            </div>
            <!-- Tanggal Lahir -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="tanggal_lahir" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required class="w-1/3 h-16 px-6 font-['Poppins'] text-left text-gray-700 bg-zinc-200 border-none rounded-full" required>
                </div>
            </div>
            <!-- Jenis Kelamin -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="jk" class="font-['Poppins'] text-right px-2">Jenis Kelamin</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-6 gap-6">
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
            <div class="mt-1 mx-auto flex justify-center items-center">
                <input type="submit" value="Selanjutnya" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
            </div>
        </form>
    </div>
</div>
@endsection