@extends('layouts.app')
@section('content')
<div class="w-full h-[400px] relative bg-gray-700 overflow-clip">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold z-20">Trilogi Main Riang</h1>
</div>
<div class="w-full h-[400px] inset-0 bg-purple-950 flex items-center justify-center">
    <div class="py-10 flex flex-row -mt-0.5 gap-10">
        <a href="">
            <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                    <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">Islamic Behaviour</h3>
                </div>
                <img src="{{ asset('images/anak sholat 2.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-125">
            </div>
        </a>
        <a href="">
            <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                    <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">5 Area Montessori</h3>
                </div>
                <img src="{{ asset('images/belajar montessori 4.jpg') }}" alt="" class="absolute z-0 -translate-y-3 translate-x-2 scale-105">
            </div>
        </a>
        <a href="">
            <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                    <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">Gembira Beraksi</h3>
                </div>
                <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-100">
            </div>
        </a>
    </div>
</div>
@endsection