@props([
    'img' => '',
    'title' => '',
    'subtitle' => '',
])

<section id="hero-section" class="relative w-full h-[30vh] sm:h-[40vh] md:h-[50vh] lg:h-[60vh] overflow-hidden">
    <div class="absolute inset-0 bg-purple-950/65 z-20"></div>
    <div class="carousel-inner relative flex w-full h-full transition-transform will-change-transform duration-700">
        <div class="carousel-item w-full h-full flex-shrink-0">
            @if (!empty($img))
                <img src="{{ $img }}" alt="{{ $title }}" class="w-full h-full object-cover object-center">
            @else
                <div class="absolute inset-0 bg-black/40 z-20 pointer-events-none"></div>
            @endif
        </div>
    </div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center z-20 px-4 sm:px-6 md:px-8">
        <h1 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">{{ $title }}</h1>
        <p class="text-white mt-3 sm:mt-4 text-sm sm:text-base md:text-lg max-w-xs sm:max-w-md md:max-w-lg mx-auto">{{ $subtitle }}</p>
    </div>
</section>