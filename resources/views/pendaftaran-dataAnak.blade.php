@extends('layouts.pendaftaran')
<!-- Judul -->
@section('title','Input Data Anak')
@section('content')
<div class="w-full flex flex-col pt-6 pb-10 gap-6">
    <!-- Form -->
    <div class="w-4/5 mx-auto">
        <form action="" class="flex flex-col gap-4">
            <!-- Nama Lengkap -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap" class="font-['Poppins'] text-right px-2">Nama Lengkap</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap anak">
                </div>
            </div>
            <!-- Nama Panggilan -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_panggilan" class="font-['Poppins'] text-right px-2">Nama Panggilan</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_panggilan" name="nama_panggilan" required class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama panggilan anak">
                </div>
            </div>
            <!-- Tanggal Lahir -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="tgl_lahir" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" required class="w-1/3 h-16 px-6 font-['Poppins'] text-left text-gray-700 bg-zinc-200 border-none rounded-full">
                </div>
            </div>
            <!-- Jenis Kelamin -->
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="jenis_kelamin" class="font-['Poppins'] text-right px-2">Jenis Kelamin</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-6 gap-6">
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
                        Laki-laki
                    </label>
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
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