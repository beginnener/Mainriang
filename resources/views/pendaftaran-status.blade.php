@extends('layouts.pendaftaran')
<!-- Judul -->
@section('title')
    {{ $registrant->status_label }}
@endsection
@section('content')
    <div class="w-full my-8 flex flex-col justify-center font-['Poppins']">
        <div class="mx-48 flex flex-row gap-6 items-center">
            <div class="flex flex-col h-fit w-[1200px]">
                <span class="font-semibold text-left text-xl">
                    Admin akan menghubungi anda melalui whatsapp untuk detail {{ strtolower($registrant->status_label) }}, mohon ditunggu..<br>
                </span>
                <span class="mt-2 font-semibold text-left text-lg text-amber-500">
                    (Halaman akan otomatis berubah setelah sesi {{ strtolower($registrant->status_label) }} selesai)
                {{-- </span>
                <div class="my-2 flex items-center">
                    <button type="button" class="inline-flex items-center justify-center w-grow py-4 px-8 rounded-full bg-white text-black font-bold text-center transition hover:bg-purple-900 border hover:text-white border-purple-950">
                    Hubungi admin
                    </button>
                </div> --}}
            </div>
            <span class="ml-10 px-6 transform scale-125">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="">
            </span>
        </div>
    </div>
    {{-- block separator --}}
    <div class="w-full flex justify-center my-6"></div> 
@endsection