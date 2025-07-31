@extends('layouts.admin')
@section('content')

@include('components.admin-sidenav')

<div class="ml-0 lg:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">

    {{-- Flash Message --}}
    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    {{-- Form Tambah Lokasi --}}
    <div class="bg-white border border-gray-200 rounded-xl p-6 mb-8 shadow">
        <h2 class="text-lg font-semibold mb-4">Tambah Lokasi Sekolah</h2>
        <form method="POST" action="{{ route('admin-program-storeLocation') }}">
            {{-- Ganti action sesuai kebutuhan --}}
            @csrf
            <div class="flex flex-col md:flex-row md:items-end gap-4">
                <div class="flex-1">
                    <label for="nama_lokasi" class="block text-sm font-medium mb-1">Nama Lokasi</label>
                    <input type="text" name="nama_lokasi" id="nama_lokasi" required
                        class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">
                </div>
                <button type="submit"
                    class="px-6 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition min-w-[150px]">
                    Tambah Lokasi
                </button>
            </div>
        </form>
    </div>

    {{-- Tabel Lokasi --}}
    <div class="mb-8">
        <h2 class="text-lg font-semibold mb-4">Daftar Lokasi Sekolah</h2>
        <div class="overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">ID</th>
                        <th class="px-6 py-3 text-left font-semibold">Nama Lokasi</th>
                        <th class="px-6 py-3 text-left font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($listLocation as $lokasi)
                        <tr>
                            <td class="px-6 py-3">{{ $lokasi->id }}</td>
                            <td class="px-6 py-3">{{ $lokasi->name }}</td>
                            <td class="px-6 py-3">
                                <form action="{{ route('admin-location.destroy', $lokasi->id) }}" method="POST" onsubmit="return confirm('Hapus lokasi ini?');">
                                    {{-- Ganti action --}}
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($listLocation->isEmpty())
                        <tr><td colspan="3" class="px-6 py-4 text-center text-gray-500">Belum ada lokasi.</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    

    {{-- Form Tambah Lokasi --}}
    <div class="bg-white border border-gray-200 rounded-xl p-6 mb-8 shadow">
        <h2 class="text-lg font-semibold mb-4">Tambah Lokasi Sekolah</h2>
        <form method="POST" action="{{ route('admin-program-storeProgram') }}">
            @csrf

            {{-- Dropdown Pilih Lokasi --}}
            <div class="mb-4">
                <label for="lokasi_id" class="block text-sm font-medium mb-1">Pilih Lokasi:</label>
                <select name="lokasi_id" id="lokasi_id"
                    class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">
                    <option value="">-- Pilih Lokasi --</option>
                    @foreach($listLocation as $lokasi)
                        <option value="{{ $lokasi->id }}" @selected(request('lokasi_id') == $lokasi->id)>
                            {{ $lokasi->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Input Nama Program --}}
            <div class="mb-4">
                <label for="nama_program" class="block text-sm font-medium mb-1">Nama program</label>
                <input type="text" name="nama_program" id="nama_program" required
                    class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit"
                    class="w-full md:w-auto px-6 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                    Tambah Program
                </button>
            </div>
        </form>
    </div>

    {{-- Dropdown Lokasi untuk Filter Program --}}
    <div class="mb-4">
        <form method="GET" class="flex flex-wrap items-center gap-4">
            <label for="lokasi_program" class="font-medium">Pilih Lokasi:</label>
            <select name="lokasi_program" id="lokasi_program"
                class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300 min-w-[200px]"
                onchange="this.form.submit()">
                <option value="">-- Pilih Lokasi --</option>
                @foreach($listLocation as $lokasi)
                    <option value="{{ $lokasi->id }}" @selected(request('lokasi_program') == $lokasi->id)>{{ $lokasi->name }}</option>
                @endforeach
            </select>
        </form>
    </div>

    {{-- Tabel Program Berdasarkan Lokasi --}}
    <div>
        <h2 class="text-lg font-semibold mb-4">Program di Lokasi Terpilih</h2>
        <div class="overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">ID</th>
                        <th class="px-6 py-3 text-left font-semibold">Nama Program</th>
                        <th class="px-6 py-3 text-left font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($listProgram->where('location_id', request('lokasi_program')) as $program)
                        <tr>
                            <td class="px-6 py-3">{{ $program->id }}</td>
                            <td class="px-6 py-3">{{ $program->Program->name }}</td>
                            <td class="px-6 py-3">
                                <form action="{{ route('admin-program.destroy', $program->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
