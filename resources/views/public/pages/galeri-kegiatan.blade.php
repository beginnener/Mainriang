@extends('layouts.app')
@section('content')

<!-- Banner Section -->
@php
    $images = [
        ['src' => asset('images/anak sholat 2.jpg')],
        ['src' => asset('images/belajar montessori 4.jpg')],
        ['src' => asset('images/WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg')],
        ['src' => asset('images/foto famgath.jpg')]
    ];
@endphp

<div class="w-full h-72 relative bg-gray-700">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Galeri Kegiatan</h1>
</div>

<div class="bg-purple-950"> 
    <!-- Card Section -->
    <div class="w-full bg-purple-950 py-12 px-4">
        <div class="max-w-6xl mx-auto bg-white rounded-3xl p-10">

            <h2 class="text-purple-950 text-2xl font-bold font-['Poppins'] text-center mb-12">Kegiatan Reguler</h2>

            <div class="max-w-5xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-8 text-white font-['Poppins']">
                @php
                    $kegiatanReguler = [
                        ['no' => 1, 'title' => 'Fieldtrip'],
                        ['no' => 2, 'title' => 'Berenang'],
                        ['no' => 3, 'title' => 'Cooking Class'],
                        ['no' => 4, 'title' => 'Sportclass'],
                        ['no' => 5, 'title' => 'Kaulinan Sunda'],
                        ['no' => 6, 'title' => 'English Class'],
                        ['no' => 7, 'title' => 'Medical Check Up'],
                        ['no' => 8, 'title' => 'Asesmen DTKA'],
                        ['no' => 9, 'title' => 'Parenting'],
                    ];
                @endphp

                @foreach ($kegiatanReguler as $kegiatan)
                <div class="flex items-start space-x-4">
                    <div class="min-w-[32px] min-h-[32px] bg-yellow-400 text-purple-950 font-semibold flex items-center justify-center rounded-full">
                        {{ $kegiatan['no'] }}
                    </div>
                    <div>
                        <h3 class="text-purple-950 text-lg font-medium">{{ $kegiatan['title'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            <h2 class="text-purple-950 text-2xl font-bold font-['Poppins'] text-center mt-12 mb-12">Kegiatan Anual</h2>
            <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-4">
                @php
                    $kegiatanAnual = [
                        'Masa Pengenalan Lingkungan Sekolah',
                        'Back To School',
                        'Wonderful Ramadhan',
                        'Bakti Sosial',
                        'Read Aloud with Parents',
                        'Pentas Riang',
                        'Family Gathering',
                    ];
                @endphp

                @foreach ($kegiatanAnual as $item)
                <div class="px-6 py-3 bg-gradient-to-r from-yellow-300 to-orange-400 text-black rounded-full shadow-md font-semibold font-['Poppins'] text-center">
                    {{ $item }}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @php
        $images = [
            ['src' => asset('images/galeriKegiatan/Berenang.jpg')],
            ['src' => asset('images/galeriKegiatan/Fieldtrip Klinik Gigi.jpg')],
            ['src' => asset('images/galeriKegiatan/foto famgath.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_2439.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_2446.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_2501.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_2520.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_2585.jpg')],
            ['src' => asset('images/galeriKegiatan/IMG_20241025_094357.jpg')],
            ['src' => asset('images/galeriKegiatan/Wisuda TK B 2024_2025.jpg')],
        ];
    @endphp

    <x-carousel :images="$images" />

    @php
    $videos = [
        ['id'=>'video','src' => 'https://www.youtube.com/embed/OyEJD6ecq_U'],
        ['id'=>'video', 'src' => 'https://www.youtube.com/embed/OF7MxaJ5fAw'],
        ['id'=>'video', 'src' => 'https://www.youtube.com/embed/OF7MxaJ5fAw'],
    ];
    @endphp

    <div class="relative z-10 bg-white">
        <x-galeri-program :title="'Galeri Video'" :videos="$videos" />
    </div>
</div>
@endsection
