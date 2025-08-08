@extends('layouts.app')

@section('content')

    <div class="w-full h-56 md:h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-2xl md:text-3xl font-bold">TK</h1>
    </div>
    <div class="relative w-full">
        <!-- Section Putih -->
        <div class="relative z-10 flex flex-col xl:flex-row px-8 md:px-24 lg:px-40 py-10 md:py-32 gap-8 md:gap-12 bg-white rounded-br-[2rem] md:rounded-br-[3rem] rounded-bl-[2rem] md:rounded-bl-[3rem] items-center">
            <div class="aspect-square w-40 md:w-72 lg:w-96 flex-shrink-0 bg-slate-300 rounded-tr-full rounded-tl-full rounded-bl-full shadow-[-8px_3px_0px_0px_rgba(255,152,78,1.00)] md:shadow-[-15px_5px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
                <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.04_376a1b4f.jpg') }}" alt="" class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col flex-grow mx-0 md:mx-8 gap-4 md:gap-5">
                <div class="px-8 md:px-16 py-4 mx-auto flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-full">
                    <span class="font-['Poppins'] font-bold text-lg md:text-xl">Tentang TK</span>
                </div>
                <div class="text-slate-900 text-base md:text-xl font-medium font-['Poppins']">
                    <p>
                        Di TK Main Riang, kami menawarkan program yang dirancang untuk
                        memenuhi kebutuhan anak-anak usia 4-6 tahun. Program kami mencakup
                        kegiatan belajar, bermain, dan berkreasi yang dirancang untuk
                        mengembangkan kemampuan kognitif, motorik, dan sosial anak-anak dengan
                        metode trilogi Main Riang.
                        <br><br>
                        Kami juga percaya bahwa orang tua adalah mitra penting dalam perkembangan anak-anak.
                        Oleh karena itu, kami berkomitmen untuk menjaga komunikasi yang baik dengan orang tua
                        dan memastikan bahwa anak-anak mendapatkan pendidikan yang terbaik.
                    </p>
                    <br>
                    Fasilitas kami dilengkapi dengan:
                    <ul class="list-disc list-inside text-slate-900 text-base md:text-xl font-medium font-['Poppins'] mt-2">
                        <li>Ruang belajar yang nyaman dan terang</li>
                        <li>Area bermain yang luas dan aman</li>
                        <li>Fasilitas makan dan minum yang sehat</li>
                        <li>Water Heater</li>
                        <li>CCTV</li>
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
                        Kegiatan di TK dirancang untuk membangun kemandirian anak melalui berbagai aktivitas yang menyenangkan dan edukatif. Jadwal lengkap kegiatan dapat dilihat pada daftar di bawah ini.
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-4 md:p-8 mx-auto max-w-4xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-3 md:space-y-4">
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                                <span class="ml-3 text-slate-800 font-medium">Kids Arrival, freeplay</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                                <span class="ml-3 text-slate-800 font-medium">Opening Circle Time</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                                <span class="ml-3 text-slate-800 font-medium">Islamic Behavior</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">4</div>
                                <span class="ml-3 text-slate-800 font-medium">5 Basic Area</span>
                            </div>
                        </div>
                        <div class="space-y-3 md:space-y-4">
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">5</div>
                                <span class="ml-3 text-slate-800 font-medium">Break/Snack Time</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">6</div>
                                <span class="ml-3 text-slate-800 font-medium">Gembira Beraksi</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">7</div>
                                <span class="ml-3 text-slate-800 font-medium">Closed Circle Time</span>
                            </div>
                            <div class="flex items-center p-2 bg-white rounded-lg">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-900 rounded-full flex items-center justify-center text-white font-bold text-sm">8</div>
                                <span class="ml-3 text-slate-800 font-medium">Go Home</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    

@endsection