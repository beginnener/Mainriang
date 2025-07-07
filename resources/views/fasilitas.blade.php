@extends('layouts.app')
@section('content')
<div class="bg-purple-950">
    <div class="w-full h-72 relative bg-gray-700">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Fasilitas</h1>
    </div>
    <div x-data="modalHandler()">
        <!-- Sort Button -->
        <div class="px-28 my-8 flex justify-end">
            <div class="relative" x-data="{ showDropdown: false }">
                <button 
                    @click="showDropdown = !showDropdown"
                    class="flex items-center gap-2 px-4 py-2 bg-white text-purple-950 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z" />
                    </svg>
                    <span x-text="selectedBranch === 'all' ? 'Semua Cabang' : selectedBranch === 'gunung-batu' ? 'Gunung Batu' : 'Arcamanik'"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200" :class="{'rotate-180': showDropdown}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                
                <div x-show="showDropdown" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     @click.away="showDropdown = false"
                     class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-30">
                    <div class="py-2">
                        <button @click="selectedBranch = 'all'; showDropdown = false" 
                                class="w-full text-left px-4 py-2 hover:bg-purple-50 transition-colors duration-200"
                                :class="{'bg-purple-100 text-purple-700': selectedBranch === 'all'}">
                            Semua Cabang
                        </button>
                        <button @click="selectedBranch = 'gunung-batu'; showDropdown = false" 
                                class="w-full text-left px-4 py-2 hover:bg-purple-50 transition-colors duration-200"
                                :class="{'bg-purple-100 text-purple-700': selectedBranch === 'gunung-batu'}">
                            Gunung Batu
                        </button>
                        <button @click="selectedBranch = 'arcamanik'; showDropdown = false" 
                                class="w-full text-left px-4 py-2 hover:bg-purple-50 transition-colors duration-200"
                                :class="{'bg-purple-100 text-purple-700': selectedBranch === 'arcamanik'}">
                            Arcamanik
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative pb-16 flex flex-wrap justify-center gap-8">
            <template x-for="facility in filteredFacilities" :key="facility.id">
                <div class="relative z-10 w-[400px] h-[260px] bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-800/80 transition-transform duration-500 hover:scale-105 cursor-pointer group"
                    @click="openModal(facility.title, facility.description, facility.image)">
                    <div class="absolute z-10 bottom-0 w-full h-16 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <div class="p-4 mx-auto">
                            <h3 class="font-['Poppins'] font-bold text-xl select-none" x-text="facility.title"></h3>
                        </div>
                        <!-- Branch indicator -->
                        <div class="absolute top-2 right-2 px-2 py-1 bg-white/80 rounded-full text-xs font-semibold text-purple-950" x-text="facility.branch === 'gunung-batu' ? 'GB' : 'AR'"></div>
                    </div>
                    <img :src="facility.image" alt="" class="absolute inset-0 -top-16 w-full h-full object-cover opacity-100 z-0">
                </div>
            </template>
            <template x-if="isOpen">
                <div class="fixed inset-0 z-50 flex items-center justify-center">
                    <!-- Overlay hitam -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm"
                        @click="isOpen = false"
                    ></div>
    
                    <!-- Modal content -->
                    <div class="relative z-10 bg-white w-[90%] md:w-[600px] rounded-2xl shadow-lg px-8 pt-10 pb-8 max-h-[90vh] overflow-y-auto">
                        <button
                            class="absolute top-2 right-5 text-gray-500 hover:text-black text-2xl"
                            @click="isOpen = false"
                        >&times;</button>
    
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
            selectedBranch: 'all',
            facilities: [
                // Fasilitas Gunung Batu
                { id: 1, title: 'Ruang Kelas Montessori', description: 'Ruang kelas yang dilengkapi dengan material Montessori lengkap untuk mendukung pembelajaran anak usia dini', image: '{{ asset('images/19.png') }}', branch: 'gunung-batu' },
                { id: 2, title: 'Playground Outdoor', description: 'Area bermain outdoor yang aman dan menyenangkan untuk mengembangkan motorik kasar anak', image: '{{ asset('images/19.png') }}', branch: 'gunung-batu' },
                { id: 3, title: 'Perpustakaan Mini', description: 'Perpustakaan dengan koleksi buku anak yang lengkap untuk menumbuhkan minat baca', image: '{{ asset('images/19.png') }}', branch: 'gunung-batu' },
                { id: 4, title: 'Ruang Seni & Kreativitas', description: 'Ruang khusus untuk kegiatan seni dan kreativitas anak dengan peralatan lengkap', image: '{{ asset('images/19.png') }}', branch: 'gunung-batu' },
                { id: 5, title: 'Mushola', description: 'Mushola untuk pembelajaran dan praktik ibadah sehari-hari', image: '{{ asset('images/19.png') }}', branch: 'gunung-batu' },
                
                // Fasilitas Arcamanik
                { id: 6, title: 'Lab Komputer Anak', description: 'Laboratorium komputer khusus anak dengan software edukatif yang menarik', image: '{{ asset('images/19.png') }}', branch: 'arcamanik' },
                { id: 7, title: 'Ruang Musik', description: 'Ruang musik dengan berbagai alat musik anak untuk mengembangkan bakat musik', image: '{{ asset('images/19.png') }}', branch: 'arcamanik' },
                { id: 8, title: 'Taman Hidroponik', description: 'Taman hidroponik untuk pembelajaran tentang alam dan tanaman', image: '{{ asset('images/19.png') }}', branch: 'arcamanik' },
                { id: 9, title: 'Ruang Praktik Masak', description: 'Ruang praktik masak sederhana untuk pembelajaran life skill anak', image: '{{ asset('images/19.png') }}', branch: 'arcamanik' },
                { id: 10, title: 'Kolam Renang Mini', description: 'Kolam renang mini yang aman untuk kegiatan berenang dan terapi air', image: '{{ asset('images/19.png') }}', branch: 'arcamanik' }
            ],
            get filteredFacilities() {
                if (this.selectedBranch === 'all') {
                    return this.facilities;
                }
                return this.facilities.filter(facility => facility.branch === this.selectedBranch);
            },
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