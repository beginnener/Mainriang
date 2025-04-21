@extends('layouts.app')

@section('content')
    <div class="w-full h-72 relative bg-gray-700">
        <img src="/images/Banner.png" class="absolute inset-0 w-full h-full opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Pendaftaran</h1>
    </div>
    <div class="w-full py-16">
        <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex justify-left items-center">
            <span class="ml-48 font-['Fredoka'] font-semibold text-purple-950 text-3xl text-left" style="-webkit-text-stroke: 1px #3b0764;">Langkah Pendaftaran</span>
        </div>
        <div class="w-4/5 h-auto bg-white mt-8 pl-48">
            <p class="text-slate-900 text-xl font-medium font-['Poppins']">
                Sebelum mendaftar, pastikan Anda telah memiliki akun Main Riang. Jika Anda belum memiliki akun, silakan daftar terlebih dahulu dengan memencet tombol login di kanan atas.<br/>
                <br/>Pastikan juga Anda telah membaca dan memahami program-program yang ditawarkan oleh Main Riang yang tersedia di website atau cek di
                <a class="text-xl font-['Poppins'] text-blue-600 transition duration-300 hover:underline" href="#">link ini</a>
                <a class="text-slate-900 text-xl font-medium font-['Poppins']">
                . Informasi mengenai program, kegiatan, serta ketentuan yang berlaku dapat membantu Anda dalam memilih 
                dan mengikuti aktivitas yang sesuai dengan minat dan kebutuhan Anda. Dengan memahami program yang tersedia, 
                Anda dapat memaksimalkan pengalaman Anda bersama Main Riang.<br/>
                <br/>Berikut adalah tahapan pendaftaran Main riang:<br/></a>
            </p>
            <ul class="mt-1 font-['Poppins'] text-xl list-disc list-inside">
                <li>Pengisian data anak.</li>
                <li>Pengisian data orang tua.</li>
                <li>Pembayaran uang pendaftaran.</li>
                <li>Pemilihan cabang dan program.</li>
                <li>Pengisian form lanjutan.</li>
                <li>Asesmen dan wawancara oleh psikolog.</li>
                <li>Konfirmasi data.</li>
                <li>Pembayaran pendidikan.</li>
            </ul>
        </div>
        <div class="mt-8 mx-auto flex justify-center items-center">
            <a href="/data-anak" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
              Saya Ingin Mendaftar
            </a>
        </div>
    </div>
@endsection