@extends('layouts.app')

@section('content')
    <div class="w-full h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Pendaftaran</h1>
    </div>
    <div class="w-full py-8 md:py-12 lg:py-16">
        <x-title title="Langkah Pendaftaran" />
        <div class="h-auto bg-white mt-4 md:mt-6 lg:mt-8 px-8 lg:px-48">
            <p class="text-slate-900 text-base md:text-lg lg:text-xl font-medium font-['Poppins']">
                Sebelum mendaftar, pastikan Anda telah memiliki akun Main Riang. Jika Anda belum memiliki akun, silakan daftar terlebih dahulu dengan memencet tombol login di kanan atas.<br/>
                <br/>Selain itu, penting untuk membaca informasi lengkap mengenai program dan kegiatan yang tersedia di Main Riang. Anda dapat mengakses dokumen tersebut melalui tautan <strong>Detail Harga</strong> yang tersedia di bawah.
                <a class="text-slate-900 text-base md:text-lg lg:text-xl font-medium font-['Poppins']">
                Informasi mengenai program, kegiatan, serta ketentuan yang berlaku dapat membantu Anda dalam memilih 
                dan mengikuti aktivitas yang sesuai dengan minat dan kebutuhan Anda. Dengan memahami program yang tersedia, 
                Anda dapat memaksimalkan pengalaman Anda bersama Main Riang.<br/>
                <br/>Berikut adalah tahapan pendaftaran Main riang:<br/></a>
            </p>
            <ul class="mt-1 font-['Poppins'] text-base md:text-lg lg:text-xl list-disc list-inside">
                <li>Pengisian data anak</li>
                <li>Pengisian data orang tua</li>
                <li>Pembayaran uang pendaftaran</li>
                <li>Pemilihan cabang dan program</li>
                <li>Pengisian form lanjutan</li>
                <li>Asesmen dan wawancara oleh psikolog</li>
                <li>Konfirmasi data</li>
                <li>Pembayaran pendidikan</li>
            </ul>
        </div>
        <div class="mt-6 md:mt-8 mx-auto flex justify-center items-center">
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6">
                {{-- Tombol Daftar Program --}}
                <a href="https://drive.google.com" target="_blank"
                    class="inline-flex items-center justify-center w-64 md:w-72 lg:w-80 h-12 md:h-14 lg:h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg md:text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                    Detail Harga
                </a>

                {{-- Tombol Mendaftar --}}
                <a href="{{ route('form') }}" 
                    class="inline-flex items-center justify-center w-64 md:w-72 lg:w-80 h-12 md:h-14 lg:h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg md:text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                    Saya Ingin Mendaftar
                </a>
            </div>
        </div>
    </div>
@endsection