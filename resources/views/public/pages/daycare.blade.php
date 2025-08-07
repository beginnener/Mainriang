@extends('layouts.app')

@section('content')
<div class="w-full h-56 md:h-72 relative bg-gray-700">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-2xl md:text-3xl font-bold">Day Care</h1>
</div>
<div class="relative w-full">
    <!-- Section Putih -->
    <div class="relative z-10 flex flex-col xl:flex-row px-8 md:px-24 lg:px-40 py-10 md:py-32 gap-8 md:gap-12 bg-white rounded-br-[2rem] md:rounded-br-[3rem] rounded-bl-[2rem] md:rounded-bl-[3rem] items-center">
        <div class="aspect-square w-40 md:w-72 lg:w-96 flex-shrink-0 bg-slate-300 rounded-tr-full rounded-tl-full rounded-bl-full shadow-[-8px_3px_0px_0px_rgba(255,152,78,1.00)] md:shadow-[-15px_5px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
            <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_0948c5ad.jpg') }}" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="flex flex-col flex-grow mx-0 md:mx-8 gap-4 md:gap-5">
            <div class="px-16 py-4 mx-auto flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-full">
                <span class="font-['Poppins'] font-bold text-lg md:text-xl">Tentang Day Care</span>
            </div>
            <div class="text-slate-900 text-base md:text-xl font-medium font-['Poppins']">
                <p>
                Di Main Riang Daycare, kami menawarkan program yang dirancang untuk memenuhi kebutuhan anak-anak usia 1-6 tahun.
                Program kami mencakup kegiatan belajar, bermain, dan berkreasi yang dirancang untuk mengambangkan kemampuan kognitif, motorik, dan sosial anak-anak.
                Kami juga percaya bahwa orang tua adalah mitra penting dalam perkembangan anak-anak. Oleh karena itu,
                kami berkomitmen untuk menjaga komunikasi yang baik dengan orang tua dan memastikan bahwa anak-anak mendapatkan perawatan yang terbaik.
                </p>
                <br>
                Fasilitas kami dilengkapi dengan:
                <ul class="list-disc list-inside text-slate-900 text-base md:text-xl font-medium font-['Poppins'] mt-2">
                    <li>Ruang belajar yang nyaman dan terang</li>
                    <li>Area bermain yang luas dan aman</li>
                    <li>Fasilitas makan dan minum yang sehat</li>
                    <li>Water Heater</li>
                    <li>CCTV</li>
                    <li>Pengawasan yang ketat dan perawatan yang baik</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Background Gradient di bawah tapi muncul setelah section putih -->
    <div class="relative py-10 md:py-20 -mt-6 md:-mt-10 z-0 w-full bg-gradient-to-l from-orange-400 to-amber-300">
        <div class="px-8 md:px-12 lg:px-48">
            <div class="my-4">
                <h2 class="font-['Poppins'] text-slate-950 text-2xl md:text-3xl font-bold text-center">Daily Activity</h2>
                <p class="mt-2 font-['Poppins'] text-slate-950 text-xs md:text-sm text-center mb-4">
                    Kegiatan di Daycare dirancang untuk membangun kemandirian anak melalui berbagai aktivitas yang menyenangkan dan edukatif. Jadwal lengkap kegiatan dapat dilihat pada tabel di bawah ini.
                </p>
            </div>
            <div class="overflow-x-auto rounded-xl shadow-lg bg-white border border-gray-200">
                <table class="min-w-[400px] w-full table-fixed divide-y divide-gray-200 font-['Poppins'] text-xs md:text-base">
                    <thead>
                        <tr class="bg-gradient-to-r from-purple-600 to-purple-700">
                            <th class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-white font-semibold text-xs md:text-sm uppercase tracking-wider">Mulai</th>
                            <th class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-white font-semibold text-xs md:text-sm uppercase tracking-wider">Selesai</th>
                            <th class="px-2 md:px-6 py-2 text-center text-white font-semibold text-xs md:text-sm uppercase tracking-wider">Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">07.30</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">08.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Arrival</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">08.00</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">09.30</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Playgroup Class</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">09.30</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">09.45</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Toilet Training</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">09.45</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">10.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Snack Time</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">10.00</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">11.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">5 Basic Area Montessori</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">11.00</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">12.30</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Lunch Time + Sholat</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">12.30</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">12.45</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Toilet Training & Brushing Teeth</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">12.45</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">14.30</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Nap Time</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">14.30</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">15.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Snack Time</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">15.00</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">15.30</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Toilet Training + shower Time</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">15.30</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">16.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Sholat + Mengaji</td>
                        </tr> 
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">16.00</td>
                            <td class="w-20 md:w-32 px-2 md:px-6 py-2 text-center text-gray-900 font-medium">17.00</td>
                            <td class="px-2 md:px-6 py-2 text-center text-gray-700">Free Time/Go Home</td>
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
    @if ($images && count($images) > 0)
        <div class="relative z-10 -mt-6 md:-mt-10 bg-white rounded-t-[2rem] md:rounded-t-[3rem]">
            <x-galeri-program :images="$images" />
        </div>
    @endif
    <!-- Tombol -->
    <div class="mb-10 md:mb-20 relative z-10 flex justify-center">
        <a href="/data-anak" class="inline-flex items-center justify-center w-60 md:w-80 h-12 md:h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg md:text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
            Daftar Sekarang
        </a>
    </div>
</div>
@endsection
