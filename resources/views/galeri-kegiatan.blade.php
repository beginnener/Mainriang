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

<div class="relative">
    <!-- Carousel Section -->
    <div x-data="carousel({{ Js::from($images) }})"  class="relative w-full h-[70vh] mx-auto overflow-hidden shadow-lg touch-none focus:outline-none focus:border-transparent" role="region" aria-label="Image Carousel">
        <!-- Carousel Images -->
        <div class="flex transition-all duration-500 ease-in-out h-full" :style="`transform: translateX(-${active * 100}%)`">
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full flex-shrink-0 flex items-center justify-center">
                    <img :src="image.src" class="w-full h-full object-cover object-center" loading="lazy" x-transition:enter="transition ease-in-out duration-500" x-transition:leave="transition ease-in-out duration-500" />
                    <template x-if="image.heading || image.description">
                        <div :class="`absolute ${image.textpos}`" class="w-fit h-fit bg-black/20 border border-white backdrop-blur-sm rounded-[2rem]">
                            <div class="p-8">
                                <span class="font-['Poppins'] text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-l from-orange-400 to-amber-200" x-text="image.heading" x-show="image.heading"></span>
                                <div class="mt-2 w-[30rem]">
                                    <span class="font-['Poppins'] text-base text-white" x-text="image.description" x-show="image.description"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
        
        <!-- Prev / Next Buttons -->
        <button @click="prev()" class="absolute z-20 top-1/2 left-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">
            &#10094;
        </button>
        <button @click="next()" class="absolute z-20 top-1/2 right-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">
            &#10095;
        </button>
        
        <!-- Dots Navigation -->
        <div class="absolute z-20 bottom-4 w-full flex justify-center space-x-2">
            <template x-for="(image, index) in images" :key="index">
                <div @click="goTo(index)" :class="{ 'w-8 rounded-md bg-white': index === active, 'bg-gray-400': index !== active }" class="w-3 h-3 rounded-full cursor-pointer transition-all duration-700"></div>
            </template>
        </div>
    </div>
</div>

<!-- Card Section -->
<div class="w-full h-[400px] inset-0 bg-purple-950 flex items-center justify-center">
    <div class="py-10 flex flex-row gap-10">
        @foreach (range(1, 3) as $i)
        <a href="">
            <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-800/80 transition-transform duration-500 hover:scale-105 group">
                <div class="absolute z-10 bottom-0 w-full h-16 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center transition-all duration-500 ease-in-out group-hover:h-full">
                    <div class="p-4">
                        <h3 class="font-['Poppins'] font-bold text-xl select-none transition-transform duration-500 ease-in-out group-hover:ml-0 w-full">Islamic Behaviour</h3>
                        <p class="w-full flex flex-wrap font-['Poppins'] text-base transition-opacity duration-500 ease-in-out group-hover:opacity-100">Kegiatan rutin</p>
                    </div>
                </div>
                <img src="{{ asset('images/anak sholat 2.jpg') }}" alt="" class="absolute opacity-100 z-0 -translate-y-6 translate-x-2 scale-125">
            </div>
        </a>
        @endforeach
    </div>
</div>

@php
    $images = [
        ['src' => asset('images/anak sholat 2.jpg'), 
                'heading' => 'Image 1', 
                'textpos' => '-ml-[45rem] mt-60',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.' ],
        ['src' => asset('images/belajar montessori 4.jpg'), 
            'heading' => 'Image 2', 
            'textpos' => 'ml-[43rem] mt-48',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.' ],
        ['src' => asset('images/WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg'), 
            'heading' => 'Image 3', 
            'textpos' => 'ml-[43rem] mt-52',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.' ],
        ['src' => asset('images/foto famgath.jpg'), 
            'heading' => 'Image 4', 
            'textpos' => '-ml-[45rem] -mt-60',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.' ],
    ];
@endphp

<div class="relative">
    <!-- top Gradient Overlay -->
    <div class="absolute inset-x-0 top-0 h-[300px] bg-gradient-to-b from-purple-950 via-transparent to-transparent z-10"></div>
    
    <!-- Carousel Section -->
    <div x-data="carousel({{ Js::from($images) }})" class="relative w-full h-[44rem] mx-auto overflow-hidden shadow-lg touch-none focus:outline-none focus:border-transparent" role="region" aria-label="Image Carousel">
        <!-- Carousel Images -->
        <div class="flex transition-all duration-500 ease-in-out h-full" :style="`transform: translateX(-${active * 100}%)`">
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full flex-shrink-0 flex items-center justify-center">
                    <img :src="image.src" class="w-full h-full object-cover object-center" loading="lazy" x-transition:enter="transition ease-in-out duration-500" x-transition:leave="transition ease-in-out duration-500" />
                    <template x-if="image.heading || image.description">
                        <div :class="`absolute ${image.textpos}`" class="w-fit h-fit bg-black/20 border border-white backdrop-blur-sm rounded-[2rem]">
                            <div class="p-8">
                                <span class="font-['Poppins'] text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-l from-orange-400 to-amber-200" x-text="image.heading" x-show="image.heading"></span>
                                <div class="mt-2 w-[30rem]">
                                    <span class="font-['Poppins'] text-base text-white" x-text="image.description" x-show="image.description"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
        
        <!-- Prev / Next Buttons -->
        <button @click="prev()" class="absolute z-20 top-1/2 left-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">
            &#10094;
        </button>
        <button @click="next()" class="absolute z-20 top-1/2 right-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">
            &#10095;
        </button>
        
        <!-- Dots Navigation -->
        <div class="absolute z-20 bottom-4 w-full flex justify-center space-x-2">
            <template x-for="(image, index) in images" :key="index">
                <div @click="goTo(index)" :class="{ 'w-8 rounded-md bg-white': index === active, 'bg-gray-400': index !== active }" class="w-3 h-3 rounded-full cursor-pointer transition-all duration-700"></div>
            </template>
        </div>
    </div>
    
    <!-- Bottom Gradient Overlay -->
    <div class="absolute inset-x-0 bottom-0 h-[300px] bg-gradient-to-t from-purple-950 via-transparent to-transparent z-10"></div>
</div>
@endsection
