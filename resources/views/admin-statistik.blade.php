@extends('layouts.admin')
@php use Illuminate\Support\Str; @endphp
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

            <canvas id="lokasiChart" width="400" height="200"></canvas>
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
                        <canvas id="programChart-{{ Str::slug($lokasi) }}" width="400" height="200"></canvas>
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
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: `Jumlah per Program - ${lokasi}`,
                        data: data,
                        backgroundColor: 'rgba(110, 43, 126, 1)',
                        borderColor: 'rgba(110, 43, 126, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        x: { grid: { display: false } },
                        y: { grid: { display: false }, beginAtZero: true, precision: 0 }
                    }
                }
            });
        }
        
    </script>

@endsection
