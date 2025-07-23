@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col items-center py-8 font-['Poppins'] bg-gradient-to-b from-amber-100 to-white min-h-screen">
    <h2 class="text-3xl font-extrabold mb-8 text-purple-950 drop-shadow">Daftar Pendaftaran Saya</h2>
    <div class="w-full max-w-5xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
        @forelse ($pendaftar as $daftar)
            <div class="bg-white rounded-2xl shadow-lg border-2 border-purple-200 flex flex-col p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-bold text-purple-400">ID: {{ $daftar->unique_id }}</span>
                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                        @if($daftar->status == 1) bg-yellow-200 text-yellow-800
                        @elseif($daftar->status == 2) bg-blue-200 text-blue-800
                        @elseif($daftar->status == 3) bg-green-200 text-green-800
                        @elseif($daftar->status == 4) bg-purple-200 text-purple-800
                        @else bg-gray-200 text-gray-700 @endif">
                        {{ $daftar->status_label }}
                    </span>
                </div>
                <div class="mb-2">
                    <div class="text-lg font-bold text-purple-900">{{ $daftar->child->nama }}</div>
                    <div class="text-sm text-gray-500">Tanggal Daftar: {{ $daftar->child->created_at->format('d-m-Y') }}</div>
                </div>
                <div class="mt-4 flex flex-col sm:flex-row gap-2 justify-end items-stretch">
                    <a href="/detail-pendaftaran/{{ $daftar->unique_id }}"
                    class="inline-flex items-center justify-center px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition hover:scale-105 w-full sm:w-auto">
                        <svg class="w-5 h-5 mr-2 text-purple-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3"/>
                        </svg>
                        Lihat Detail
                    </a>
                    <a href="/pendaftaran/{{ $daftar->unique_id }}"
                    class="inline-flex items-center justify-center px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition hover:scale-105 w-full sm:w-auto">
                        <svg class="w-5 h-5 mr-2 text-purple-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3"/>
                        </svg>
                        Lanjutkan Pendaftaran
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12 text-gray-400 text-lg">Belum ada pendaftaran.</div>
        @endforelse
    </div>
</div>
@endsection