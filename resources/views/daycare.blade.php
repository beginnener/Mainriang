@extends('layouts.app')

@section('content')
    <div class="w-full h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Day Care</h1>
    </div>
    <div class="relative w-full">
        <!-- Section Putih -->
        <div class="relative z-10 flex flex-row px-40 py-32 gap-12 bg-white rounded-br-[3rem] rounded-bl-[3rem] items-center">
            <div class="w-[400px] h-[400px] flex-shrink-0 bg-slate-300 rounded-tr-full rounded-tl-full rounded-bl-full shadow-[-15px_5px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
                <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_0948c5ad.jpg') }}" alt="" class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col flex-grow mx-8 gap-5">
                <div class="w-2/3 h-14 mx-auto flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-full">
                    <span class="font-['Poppins'] font-bold text-xl">Tentang Day Care</span>
                </div>
                <p class="text-slate-900 text-xl font-medium font-['Poppins']">
                    Di Main Riang Daycare, kami menawarkan program yang dirancang untuk memenuhi kebutuhan anak-anak usia 1-6 tahun. 
                    Program kami mencakup kegiatan belajar, bermain, dan berkreasi yang dirancang untuk mengambangkan kemampuan kognitif, 
                    motorik, dan sosial anak-anak. Kami juga percaya bahwa orang tua adalah mitra penting dalam perkembangan anak-anak. 
                    Oleh karena itu, kami berkomitmen untuk menjaga komunikasi yang baik dengan orang tua dan memastikan bahwa anak-anak 
                    mendapatkan perawatan yang terbaik.
                </p>
            </div>
        </div>
    
        <!-- Background Gradient di bawah tapi muncul setelah section putih -->
        <div class="relative py-20 -mt-10 z-0 w-full bg-gradient-to-l from-orange-400 to-amber-300">
            <div class="px-48">
                <div class="my-4">
                    <h2 class="font-['Poppins']text-slate-950 text-3xl font-bold text-center">Daily Activity</h2>
                </div>
                <div class="overflow-hidden rounded-lg border border-slate-900 w-full">
                    <table class="w-full table-fixed">
                        <thead>
                            <tr class="">
                                <th class="w-32 px-3 text-center border">Mulai</th>
                                <th class="w-32 px-3 text-center border border-slate-900">Selesai</th>
                                <th class="px-3 text-center border border-slate-900">Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-32 px-3 text-center ">07.30</td>
                                <td class="w-32 px-3 text-center border border-slate-900">08.00</td>
                                <td class="px-3 text-center border border-slate-900">Arrival</td>
                            </tr>
                            <tr>
                                <td class="w-32 px-3 text-center ">07.00</td>
                                <td class="w-32 px-3 text-center border border-slate-900">08.00</td>
                                <td class="px-3 text-center border border-slate-900">Arrival</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @php
        $images = [
            '/images/belajar montessori 2.jpg',
            '/images/belajar montessori 2.jpg',
            '/images/belajar montessori 2.jpg',
            '/images/belajar montessori 2.jpg',
            '/images/belajar montessori 2.jpg',
        ];
        @endphp

        <!-- Section Putih -->
        <div class="relative z-10 -mt-10 bg-white rounded-t-[3rem]">
            <div class="py-10 flex flex-row">
                <div class="mb-8 flex justify-center items-center w-[800px]">
                    <span class="font-['Poppins'] text-3xl font-bold text-purple-950 block text-right">Galeri Kegiatan</span>
                </div>
                <div x-data="multiItemCarousel({{ Js::from($images) }})" x-init="init()" class="relative w-full py-8 bg-white rounded-t-[3rem] overflow-hidden">
                    <!-- Carousel Container -->
                    <div class="relative overflow-hidden">
                        <div id="carousel-track" class="flex transition-transform duration-500 ease-in-out"
                            :style="`transform: translateX(-${currentIndex * itemWidth}px)`">
                            <template x-for="(img, i) in images" :key="i">
                                <img :src="img"
                                    class="w-[320px] h-[400px] mx-2 rounded-[3rem] object-cover flex-shrink-0">
                            </template>
                        </div>
        
                        <!-- Buttons -->
                        <button @click="prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-purple-800 text-white px-4 py-2 rounded-full z-10">&#10094;</button>
                       <!-- Tombol Next (Panah) -->
                        <button 
                            x-show="currentIndex < images.length - visibleItems" 
                            @click="next"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-2"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 translate-x-2"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-purple-800 text-white px-4 py-2 rounded-full z-10">
                            &#10095;
                        </button>
    
                        <!-- Tombol Lihat Selengkapnya -->
                        <button 
                            x-show="currentIndex >= images.length - visibleItems" 
                            @click="lihatSelengkapnya()"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-2"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 translate-x-2"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-zinc-200 text-black px-4 py-2 rounded-full z-10">
                            Lihat selengkapnya &#8594;
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tombol -->
        <div class="mb-20 relative z-10 flex justify-center">
            <a href="/data-anak" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Daftar Sekarang
            </a>
        </div>
    </div>
    

@endsection