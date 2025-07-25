@extends('layouts.admin')

@section('content')
    @include('components.admin-sidenav')

    <div class="ml-0 lg:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">📊 Statistik Pendaftaran</h2>

        {{-- Tombol Export Excel --}}
        <div class="mb-6">
            <a href="{{ route('admin.export-pendaftar') }}"
               class="inline-block px-6 py-2 bg-amber-400 text-white font-semibold rounded-md hover:bg-amber-500 transition">
                📥 Export Data Excel
            </a>
        </div>

        {{-- Total Pendaftaran --}}
        <div class="mb-8">
            <div class="text-lg font-semibold text-gray-700 mb-1">Total Pendaftaran</div>
            <div class="text-4xl font-bold text-blue-600">{{ $total }}</div>
        </div>

        {{-- Pendaftaran per Lokasi --}}
        <div class="mb-10">
            <div class="text-lg font-semibold text-gray-700 mb-2">Pendaftaran per Lokasi</div>
            <div class="overflow-auto rounded shadow-sm">
                <table class="min-w-full text-sm border border-gray-200">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left">Lokasi</th>
                            <th class="px-4 py-2 text-left">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($byLokasi as $lokasi => $jumlah)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $lokasi }}</td>
                                <td class="px-4 py-2">{{ $jumlah }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Pendaftaran per Program di Setiap Lokasi --}}
        <div class="mb-10">
            <div class="text-lg font-semibold text-gray-700 mb-2">Pendaftaran per Program di Setiap Lokasi</div>

            @foreach($byProgram as $lokasi => $programs)
                <div class="mb-6">
                    <div class="text-md font-bold text-blue-700 mb-1">{{ $lokasi }}</div>
                    <div class="overflow-auto rounded shadow-sm">
                        <table class="min-w-full text-sm border border-gray-200">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Program</th>
                                    <th class="px-4 py-2 text-left">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($programs as $program => $jumlah)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $program }}</td>
                                        <td class="px-4 py-2">{{ $jumlah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pendaftaran per Status --}}
        <div class="mb-10">
            <div class="text-lg font-semibold text-gray-700 mb-2">Pendaftaran per Status</div>
            <div class="overflow-auto rounded shadow-sm">
                <table class="min-w-full text-sm border border-gray-200">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($byStatus as $status => $jumlah)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $status }}</td>
                                <td class="px-4 py-2">{{ $jumlah }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
