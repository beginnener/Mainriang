@extends('layouts.app')
@section('content')
<div class="bg-purple-950">
    <div class="w-full h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Fasilitas</h1>
    </div>
    <div x-data="modalHandler()">
        <!-- Sort Button -->

        <div x-data="modalHandler()" class="bg-purple-950 min-h-screen pt-12 pb-4">

            @foreach ($locations as $location)
                @if ($location->facilities->isNotEmpty())
                    <!-- Judul Lokasi -->
                    <div class="text-center mb-6">
                        <h2 class="text-white text-3xl font-bold inline-block pb-2">
                            {{ $location->name }}
                        </h2>
                    </div>

                    <!-- Grid Fasilitas -->
                    <div class="relative pb-16 flex flex-wrap justify-center gap-8 pt-4">
                        @foreach ($location->facilities as $facility)
                            <div class="relative z-10 w-[400px] h-[260px] bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-800/80 transition-transform duration-500 hover:scale-105 cursor-pointer group"
                                @click="openModal('{{ $facility->name }}', `{{ $facility->description }}`, '{{ asset('storage/' . $facility->image) }}')">
                                
                                <!-- Label Nama -->
                                <div class="absolute z-10 bottom-0 w-full h-16 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                                    <div class="p-4 mx-auto">
                                        <h3 class="font-['Poppins'] font-bold text-xl select-none">{{ $facility->name }}</h3>
                                    </div>
                                    <div class="absolute top-2 right-2 px-2 py-1 bg-white/80 rounded-full text-xs font-semibold text-purple-950">
                                        {{ strtoupper(Str::limit($location->name, 2, '')) }}
                                    </div>
                                </div>

                                <!-- Gambar -->
                                <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->name }}"
                                    class="absolute inset-0 -top-16 w-full h-full object-cover opacity-100 z-0">
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach


            <!-- Modal -->
            <template x-if="isOpen">
                <div class="fixed inset-0 z-50 flex items-center justify-center">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm" @click="isOpen = false"></div>

                    <!-- Modal Content -->
                    <div class="relative z-10 bg-white w-[90%] md:w-[600px] rounded-2xl shadow-lg px-8 pt-10 pb-8 max-h-[90vh] overflow-y-auto">
                        <button class="absolute top-2 right-5 text-gray-500 hover:text-black text-2xl" @click="isOpen = false">&times;</button>
                        <img :src="modalImage" alt="Fasilitas" class="w-3/4 h-48 mx-auto object-cover rounded-xl mb-4">
                        <h2 class="text-2xl font-bold mb-2" x-text="modalTitle"></h2>
                        <p class="text-base text-gray-700" x-text="modalDescription"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
<script>
    function modalHandler() {
        return {
            isOpen: false,
            modalTitle: '',
            modalDescription: '',
            modalImage: '',
            openModal(title, description, image) {
                this.modalTitle = title;
                this.modalDescription = description;
                this.modalImage = image;
                this.isOpen = true;
            }
        }
    }
</script>
@endsection