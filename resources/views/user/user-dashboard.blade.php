@extends('layouts.user')

@section('content')
<div class="w-full min-h-screen  font-['Poppins']">
    <div class="w-full max-w-7xl mx-auto py-4 sm:py-6 lg:py-8">
        {{-- Header Section --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-4 sm:mb-6 gap-3">
            <h2 class="text-2xl sm:text-3xl font-bold text-purple-950 leading-tight">
                Daftar Pendaftaran Saya
            </h2>
            {{-- Optional: Add button or stats here --}}
            <div class="text-sm text-gray-600">
                Total: {{ count($pendaftar) }} pendaftaran
            </div>
        </div>

        {{-- Card Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
            @forelse ($pendaftar as $daftar)
                <div class="bg-white w-full rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02] overflow-hidden">
                    {{-- Card Header --}}
                    <div class="p-4 sm:p-5 border-b border-gray-100">
                        <div class="flex flex-col gap-2">
                            <h4 class="font-bold text-gray-800 text-lg sm:text-xl leading-tight">
                                {{ $daftar->child->nama }}
                            </h4>
                            <p class="text-xs sm:text-sm text-gray-500">
                                Tanggal Daftar: {{ $daftar->child->created_at->format('d-m-Y') }}
                            </p>
                        </div>
                        
                        {{-- Status Badge --}}
                        <div class="mt-3">
                            <span class="inline-block text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap
                                @if($daftar->status == 1) bg-yellow-200 text-yellow-800
                                @elseif($daftar->status == 2) bg-blue-200 text-blue-800
                                @elseif($daftar->status == 3) bg-green-200 text-green-800
                                @elseif($daftar->status == 4) bg-purple-200 text-purple-800
                                @else bg-gray-200 text-gray-700 @endif">
                                {{ $daftar->status_label }}
                            </span>
                        </div>
                    </div>

                    {{-- Card Actions --}}
                    <div class="p-4 sm:p-5 bg-gray-50">
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('detail-pendaftaran', ['unique_id' => $daftar->unique_id]) }}"
                            class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold bg-gradient-to-r from-orange-400 to-amber-400 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                Lihat Detail
                            </a>


                            @if ($daftar->status < 6)
                            <a href="{{ route('form', ['id' => $daftar->unique_id]) }}"
                                class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                                Lanjutkan Pendaftaran
                            </a>
                            @else
                            <a href="{{ route('pendaftar.edit', ['unique_id' => $daftar->unique_id]) }}"
                                class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                                Lengkapi Data
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                {{-- Empty State --}}
                <div class="col-span-full">
                    <div class="text-center py-12 sm:py-16">
                        <div class="mx-auto w-24 h-24 sm:w-32 sm:h-32 mb-6 opacity-20">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-full h-full text-gray-400">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-500 mb-2">
                            Belum Ada Pendaftaran
                        </h3>
                        <p class="text-sm sm:text-base text-gray-400 mb-6 max-w-md mx-auto">
                            Anda belum memiliki pendaftaran apapun. Mulai daftarkan anak Anda sekarang!
                        </p>
                        <a href="/pendaftaran" 
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold bg-gradient-to-r from-orange-400 to-amber-400 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Buat Pendaftaran Baru
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Optional: Pagination or Load More --}}
        @if(count($pendaftar) > 0)
            <div class="mt-8 sm:mt-12 text-center">
                <p class="text-sm text-gray-500">
                    Menampilkan {{ count($pendaftar) }} dari {{ count($pendaftar) }} pendaftaran
                </p>
            </div>
        @endif
    </div>
</div>

{{-- Mobile Optimization Styles --}}
<style>
@media (max-width: 640px) {
    .grid {
        gap: 1rem;
    }
    
    .bg-white {
        margin: 0 0.25rem;
    }
}

@media (max-width: 768px) {
    .transform:hover {
        transform: none;
    }
    
    .hover\:scale-105:hover {
        transform: none;
    }
    
    .hover\:scale-\[1\.02\]:hover {
        transform: none;
    }
}
</style>
@endsection