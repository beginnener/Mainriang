<div id="carousel" class="relative w-full aspect-[21/9] mx-auto overflow-hidden shadow-lg">

    <!-- Images wrapper -->
    <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel-track">
        @foreach ($images as $image)
            <div class="w-full flex-shrink-0 flex items-center justify-center relative">
                <img src="{{ $image['src'] }}" alt="" class="w-full h-full object-cover object-center" loading="lazy">
                @if (!empty($image['heading']) || !empty($image['description']))
                    <div class="absolute {{ $image['textpos'] ?? 'bottom-6 left-6' }} w-fit h-fit bg-black/30 border border-white backdrop-blur-sm rounded-2xl">
                        <div class="p-6 max-w-md">
                            @if (!empty($image['heading']))
                                <div class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-l from-orange-400 to-amber-200">{{ $image['heading'] }}</div>
                            @endif
                            @if (!empty($image['description']))
                                <div class="mt-2 text-white text-base">{{ $image['description'] }}</div>
                            @endif
                            @if (!empty($image['button']))
                                <a href="{{ $image['button_url'] }}" class="mt-4 inline-block px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition">
                                    {{ $image['button_text'] }}
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Prev / Next Buttons -->
    <button id="prevBtn" class="absolute z-20 top-1/2 left-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">&#10094;</button>
    <button id="nextBtn" class="absolute z-20 top-1/2 right-4 -translate-y-1/2 bg-black/40 text-white p-4 text-xl rounded-full hover:bg-black/60 transition-all">&#10095;</button>

    <!-- Dots Navigation -->
    <div class="absolute bottom-6 w-full flex justify-center gap-2 z-10" id="carousel-dots">
        @foreach ($images as $i => $image)
            <div class="h-3 sm:h-4 w-3 sm:w-4 transition-all duration-300 rounded-full bg-white/30 hover:bg-white/70 cursor-pointer"></div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("carousel-track");
    const dots = document.querySelectorAll("#carousel-dots div");
    const totalSlides = dots.length;
    let currentIndex = 0;
    let interval;

    function updateSlide(index) {
        track.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            const isActive = i === index;
            dot.classList.toggle("bg-white", isActive);
            dot.classList.toggle("bg-white/30", !isActive);

            // Ganti w-3 ↔ w-8
            dot.classList.toggle("w-8", isActive);
            dot.classList.toggle("w-3", !isActive);

            // Jaga konsistensi dengan sm:w-4 default
            dot.classList.toggle("sm:w-8", isActive);
            dot.classList.toggle("sm:w-4", !isActive);
        });
        currentIndex = index;
    }

    function nextSlide() {
        updateSlide((currentIndex + 1) % totalSlides);
    }

    function prevSlide() {
        updateSlide((currentIndex - 1 + totalSlides) % totalSlides);
    }

    function goToSlide(index) {
        updateSlide(index);
        resetInterval();
    }

    function resetInterval() {
        clearInterval(interval);
        interval = setInterval(nextSlide, 5000);
    }

    document.getElementById("nextBtn").addEventListener("click", () => {
        nextSlide();
        resetInterval();
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        prevSlide();
        resetInterval();
    });

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => goToSlide(i));
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowRight") {
            nextSlide();
            resetInterval();
        } else if (e.key === "ArrowLeft") {
            prevSlide();
            resetInterval();
        }
    });

    // Swipe support
    let startX = null;
    track.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
    });
    track.addEventListener("touchend", (e) => {
        if (!startX) return;
        const endX = e.changedTouches[0].clientX;
        const delta = startX - endX;

        if (delta > 50) nextSlide();
        else if (delta < -50) prevSlide();

        resetInterval();
        startX = null;
    });

    updateSlide(currentIndex);
    interval = setInterval(nextSlide, 5000);
});
</script>