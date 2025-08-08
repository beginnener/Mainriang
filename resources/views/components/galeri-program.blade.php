@props([
    'images' => [],
    'title',
    'videos' => [],
])

<div class="py-8 px-4 md:px-0 md:py-10 flex flex-col md:flex-row">
    <div class="mb-4 md:mb-8 flex justify-center items-center w-full md:w-[800px]">
        <span class="font-['Poppins'] text-2xl md:text-3xl font-bold text-purple-950 block text-center md:text-right">{{ $title }}</span>
    </div>
    <div x-data="{
            images: [...{{ Js::from($images) }}, { lihatSelengkapnya: true }],
            currentIndex: 0,
            visibleItems: window.innerWidth >= 768 ? 3 : 1,
            get maxIndex() {
                return Math.max(0, this.images.length - this.visibleItems);
            },
            updateVisibleItems() {
                this.visibleItems = window.innerWidth >= 768 ? 3 : 1;
                if (this.currentIndex > this.maxIndex) this.currentIndex = this.maxIndex;
            }
        }"
        x-init="window.addEventListener('resize', () => { updateVisibleItems() })"
        class="relative w-full py-4 md:py-8 bg-white rounded-t-[2rem] md:rounded-t-[3rem] overflow-x-auto"
        style="scroll-behavior: smooth;"
    >
    @if ($images)
        <div class="flex gap-4">
            @foreach ($images as $img)
                <img src="{{ $img }}" class="w-40 h-52 md:w-[320px] md:h-[400px] rounded-[2rem] md:rounded-[3rem] object-cover flex-shrink-0" />
            @endforeach
            <button
                @click="window.location.href = '/galeri'"
                class="w-40 h-52 md:w-[320px] md:h-[400px] rounded-[2rem] md:rounded-[3rem] flex-shrink-0 flex items-center justify-center bg-zinc-200 text-black font-bold text-lg md:text-xl hover:bg-zinc-300 transition"
            >
                Lihat Kegiatan Lainnya &rarr;
            </button>
        </div>
    @elseif($videos)
    <div class="flex flex-row gap-4 mb-4">
        @foreach ($videos as $video)
            <iframe src="{{ $video['src'] }}" class="w-40 h-52 md:w-[320px] md:h-[400px] rounded-[2rem] md:rounded-[3rem] object-cover flex-shrink-0" frameborder="0" allowfullscreen></iframe>
        @endforeach
    </div>
    @endif
    </div>
</div>