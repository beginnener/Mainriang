@extends('layouts.admin')
@php use Illuminate\Support\Str; @endphp
@section('content')
<div class="ml-0 md:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Dashboard</h2>

    {{-- Tombol Export Excel --}}
    <div class="mb-6">
        <a href="{{ route('admin.export-pendaftar') }}"
            class="inline-block px-6 py-2 bg-amber-400 text-white font-semibold rounded-md hover:bg-amber-500 transition">
            Export Data Menjadi Excel
        </a>
    </div>

    <section id="pendaftaran-per-status">
        {{-- Total Pendaftaran --}}
        <div class="mb-8">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl shadow-md p-8 text-center hover:shadow-lg transition-shadow duration-300">
                <div class="text-xl font-semibold text-gray-700 mb-3">Total Pendaftaran</div>
            <div class="text-5xl font-bold text-blue-600 mb-2">{{ $total }}</div>
            <div class="text-sm text-gray-500">Keseluruhan registrasi</div>
            </div>
        </div>

        {{-- Pendaftaran per Status --}}
        <div class="mb-10">
            <div class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                Pendaftaran per Status
            </div>
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-left font-semibold text-gray-700 border-b border-gray-200">Status</th>
                                <th class="px-6 py-2 text-left font-semibold text-gray-700 border-b border-gray-200">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($byStatus as $status => $jumlah)
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-2 text-gray-800 font-medium">{{ $status }}</td>
                                    <td class="px-6 py-2">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                            @if($status == 'Diterima' || $status == 'Approved') bg-green-100 text-green-800
                                            @elseif($status == 'Ditolak' || $status == 'Rejected') bg-red-100 text-red-800
                                            @elseif($status == 'Pending' || $status == 'Menunggu') bg-yellow-100 text-yellow-800
                                            @else bg-purple-100 text-purple-800
                                            @endif">
                                            {{ $jumlah }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
        
    <section id="pendaftaran-per-lokasi">
        {{-- Pendaftaran per Lokasi --}}
        <div class="mb-10">
            <div class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                Pendaftaran per Lokasi
            </div>
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                    <th class="px-6 py-2 text-left font-semibold text-gray-700 border-b border-gray-200">Lokasi</th>
                    <th class="px-6 py-2 text-left font-semibold text-gray-700 border-b border-gray-200">Jumlah</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($byLokasi as $lokasi => $jumlah)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-2 text-gray-800 font-medium">{{ $lokasi }}</td>
                        <td class="px-6 py-2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            {{ $jumlah }}
                        </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            
            <div class="p-6 bg-gray-50 border-t border-gray-100">
                <div class="mb-3 text-sm font-medium text-gray-600">Visualisasi Data</div>
                <div class="bg-white rounded-lg p-4 shadow-sm">
                <canvas id="lokasiChart" width="400" height="200"></canvas>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="pendaftaran-per-program">
        {{-- Pendaftaran per Program di Setiap Lokasi --}}
        <div class="mb-10">
            <div class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                Pendaftaran per Program di Setiap Lokasi
            </div>
            
            @foreach($byProgram as $lokasi => $programs)
                <div class="mb-8">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                        {{-- Lokasi Header --}}
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-blue-700 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $lokasi }}
                            </h3>
                        </div>
                        
                        {{-- Program Table --}}
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                    <tr>
                                        <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Program</th>
                                        <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Jumlah Pendaftar</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach($programs as $program => $jumlah)
                                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                                            <td class="px-6 py-3 text-gray-800 font-medium">{{ $program }}</td>
                                            <td class="px-6 py-3">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                                                    {{ $jumlah }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        {{-- Chart Visualization --}}
                        <div class="p-6 bg-gray-50 border-t border-gray-100">
                            <div class="mb-3 text-sm font-medium text-gray-600">Visualisasi Data Program</div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <canvas id="programChart-{{ Str::slug($lokasi) }}" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<script>
    const locationLabels = {!! json_encode($byLokasi->keys()->toArray()) !!};
    const locationData = {!! json_encode($byLokasi->values()->toArray()) !!};
    const programCharts = {!! json_encode($byProgram) !!};
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('lokasiChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar', // atau 'pie', 'line', dll
        data: {
            labels: locationLabels,
            datasets: [{
                label: 'Jumlah per Lokasi',
                data: locationData,
                backgroundColor: 'rgba(110, 43, 126, 1)',
                borderColor: 'rgba(110, 43, 126, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    grid: {
                        display: false  // Hilangkan grid vertikal
                    }
                },
                y: {
                    grid: {
                        display: false  // Hilangkan grid horizontal
                    },
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script>

<script>
    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }

    for (const [lokasi, programData] of Object.entries(programCharts)) {
        const ctx = document.getElementById(`programChart-${slugify(lokasi)}`);
        if (!ctx) continue;

        const labels = Object.keys(programData);
        const data = Object.values(programData);

        new Chart(ctx, {
            type: 'pie',
            data: {
            labels: labels,
            datasets: [{
                label: `${lokasi}`,
                data: data ,
                backgroundColor: [
                    'rgba(110, 43, 126, 1)',
                    'rgba(147, 51, 234, 1)',
                    'rgba(99, 102, 241, 1)',
                    'rgba(59, 130, 246, 1)',
                    'rgba(34, 197, 94, 1)',
                    'rgba(245, 158, 11, 1)',
                    'rgba(239, 68, 68, 1)',
                    'rgba(236, 72, 153, 1)'
                ],
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: 30
            },
            plugins: {
                legend: {
                position: 'right',
                labels: {
                    boxWidth: 15,
                    padding: 20,
                    usePointStyle: true,
                    font: {
                    size: 14
                    }
                }
                }
            }
            }
        });
    }
</script>
@endsection
