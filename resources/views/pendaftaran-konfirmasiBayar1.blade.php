@extends('layouts.pendaftaran')
<!-- Judul -->
@section('title', 'Pembayaran Pendaftaran')
@section('content')
    <div class="w-full my-8 flex flex-col pt-6 pb-10 justify-center overflow-hidden">
        <div class="mx-48 flex flex-row gap-6 items-center">
            <div class="flex flex-col w-[1200px]">
                <span class="font-['Poppins'] text-left text-xl">
                    Admin akan menghubungi anda melalui whatsapp untuk detail pembayaran pendaftaran, mohon ditunggu..<br>
                </span>
                <span class="font-['Poppins'] text-left text-lg text-amber-500">
                    (Halaman akan otomatis berubah setelah admin mengkonfirmasi pembayaran)
                </span>
                <span class="mt-6 font-['Poppins'] text-left text-xl">Jika tidak ada pesan yang masuk, silahkan klik tombol dibawah ini untuk menghubungi admin.
                </span>
                <div class="my-2 flex items-center">
                    <button type="button" class="inline-flex items-center justify-center w-grow py-4 px-8 rounded-full bg-white text-black font-bold text-center transition hover:bg-purple-900 border hover:text-white border-purple-950">
                    Hubungi admin
                    </button>
                </div>
            </div>
            <span class="ml-10 px-6 transform scale-125">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="">
            </span>
        </div>
    </div>
@endsection