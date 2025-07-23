@extends('layouts.user')

@section('content')
<div class="w-full min-h-screen bg-[#f3f7ff] font-['Poppins'] px-6 py-8">
    <div class="w-full max-w-7xl mx-auto">
        {{-- Header Section --}}
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-extrabold text-orange-500">Daftar Pendaftaran Saya</h2>
            <a href="#" class="px-4 py-2 border border-gray-500 rounded-lg hover:bg-gray-200 transition">
                Tambah Profil Anak
            </a>
        </div>

        {{-- Card Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            @forelse ($pendaftar as $daftar)
                <div class="bg-white w-full max-w-sm rounded-xl shadow-md p-4 flex flex-col gap-4 hover:shadow-lg transition">
                    <div class="flex items-center gap-4">
                        {{-- Info Anak --}}
                        <div class="flex flex-col">
                            <h4 class="font-bold text-purple-900 text-lg">{{ $daftar->child->nama }}</h4>
                            <p class="text-sm text-gray-500">Tanggal Daftar: {{ $daftar->child->created_at->format('d-m-Y') }}</p>
                            <span class="mt-2 inline-block text-xs font-semibold px-3 py-1 rounded-full
                                @if($daftar->status == 1) bg-yellow-200 text-yellow-800
                                @elseif($daftar->status == 2) bg-blue-200 text-blue-800
                                @elseif($daftar->status == 3) bg-green-200 text-green-800
                                @elseif($daftar->status == 4) bg-purple-200 text-purple-800
                                @else bg-gray-200 text-gray-700 @endif">
                                {{ $daftar->status_label }}
                            </span>
                        </div>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex flex-col sm:flex-row gap-2 justify-end items-stretch px-2">
                        <a href="/detail-pendaftaran/{{ $daftar->unique_id }}"
                        class="inline-flex items-center justify-center px-3 py-1.5 text-xs bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-md transition hover:scale-105 w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-2 text-purple-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3"/>
                            </svg>
                            Lihat Detail
                        </a>

                        <a href="/pendaftaran/{{ $daftar->unique_id }}"
                        class="inline-flex items-center justify-center px-3 py-1.5 text-xs bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-md transition hover:scale-105 w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-2 text-purple-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3"/>
                            </svg>
                            Lanjutkan Pendaftaran
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-left py-12 text-gray-400 text-lg">
                    Belum ada pendaftaran.
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
