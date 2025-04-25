@extends('layouts.app')

@section('content')
    <div class="w-full h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Pendaftaran</h1>
    </div>
    <div class="relative w-full">
        <!-- Section Putih -->
        <div class="relative z-10 flex flex-row px-40 py-32 gap-12 bg-white rounded-br-[3rem] rounded-bl-[3rem] items-center">
            <div class="w-[400px] h-[400px] flex-shrink-0 bg-slate-300 rounded-tr-full rounded-tl-full rounded-bl-full shadow-[-15px_5px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
                <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_0948c5ad.jpg') }}" alt="" class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col flex-grow mx-8 gap-5">
                <div class="w-2/3 h-14 mx-auto flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-full">
                    <span class="font-['Poppins'] font-bold text-xl">Tentang Program</span>
                </div>
                <p class="text-slate-900 text-xl font-medium font-['Poppins']">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet mi vitae iaculis laoreet. 
                    Aliquam eleifend in nisi at maximus. In hendrerit lorem vitae diam tincidunt, tincidunt vestibulum ex 
                    posuere. Ut rutrum vitae elit eu ultricies. Nulla sit amet justo sapien. Etiam lacinia velit dictum, 
                    malesuada urna ac, sagittis arcu. Aliquam in metus molestie, hendrerit lectus sed, tempor erat. Nullam 
                    luctus erat ante, nec blandit sem eleifend sit amet. Fusce ultrices lacinia libero. Maecenas a dui viverra, 
                    egestas purus ornare, convallis est. Aenean condimentum ultricies gravida.
                </p>
            </div>
        </div>
    
        <!-- Background Gradient di bawah tapi muncul setelah section putih -->
        <div class="relative py-20 -mt-10 z-0 w-full bg-gradient-to-l from-orange-400 to-amber-300">
            <div class="mx-40">
                <div class="my-4">
                    <h2 class="font-['Poppins']text-slate-950 text-3xl font-bold text-center">Daily Activity</h2>
                </div>
                <p class="text-slate-900 text-xl font-medium font-['Poppins']">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet mi vitae iaculis laoreet. 
                    Aliquam eleifend in nisi at maximus. In hendrerit lorem vitae diam tincidunt, tincidunt vestibulum ex posuere.
                </p>
                <div class="w-full mx-40 my-4 flex flex-row gap-8">
                    <div class="w-1/2">
                        <span class="text-slate-900 text-xl font-medium font-['Poppins']">
                            <ol class="mt-1 font-['Poppins'] text-xl list-decimal">
                                <li>Lorem</li>
                                <li>Ipsum</li>
                                <li>Dolor</li>
                                <li>Sit</li>
                                <li>Amet</li>
                                <li>Consectetur</li>
                                <li>Elit</li>
                            </ol>
                        </span>
                    </div>
                    <div class="w-1/2">
                        <span class="text-slate-900 text-xl font-medium font-['Poppins']">
                            <ol class="mt-1 font-['Poppins'] text-xl list-decimal">
                                <li>Lorem</li>
                                <li>Ipsum</li>
                                <li>Dolor</li>
                                <li>Sit</li>
                                <li>Amet</li>
                                <li>Consectetur</li>
                                <li>Elit</li>
                            </ol>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Putih -->
        <div class="relative -top-10 z-10 flex flex-row px-40 py-32 gap-12 bg-white rounded-tr-[3rem] rounded-tl-[3rem] overflow-hidden">
           <div class="flex flex-row gap-8">
                <div class="bg-white flex items-center mr-10">
                    <span class="font-['Poppins'] text-3xl font-bold text-purple-950 ml-auto block text-right">Galeri Kegiatan</span>
                </div>
                <img src="{{ asset('images/belajar montessori 2.jpg') }}" alt="" class="w-[320px] h-[400px] rounded-[3rem] object-cover">
                <img src="{{ asset('images/belajar montessori 2.jpg') }}" alt="" class="w-[320px] h-[400px] rounded-[3rem] object-cover">
                <img src="{{ asset('images/belajar montessori 2.jpg') }}" alt="" class="w-[320px] h-[400px] rounded-[3rem] object-cover">
           </div>
        </div>
    
        <!-- Tombol -->
        <div class="mb-20 relative -top-10 z-10 flex justify-center">
            <a href="/data-anak" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Daftar Sekarang
            </a>
        </div>
    </div>
    

@endsection