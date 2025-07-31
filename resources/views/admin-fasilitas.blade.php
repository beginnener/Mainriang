@extends('layouts.admin')

@section('content')
<div class="flex">
    {{-- Konten utama digeser pakai margin kiri --}}
    <div class="ml-64 p-6 w-full font-['Poppins']">
        <h2 class="text-2xl font-bold text-purple-900 mb-6">Manajemen Fasilitas</h2>

        {{-- Form Tambah Fasilitas --}}
        <form action="#" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md mb-10 border border-purple-200">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-1 font-semibold text-purple-800">Nama Fasilitas</label>
                    <input type="text" name="nama" class="w-full border rounded px-4 py-2" placeholder="Contoh: Ruang Kelas A">

                    <label class="block mt-4 mb-1 font-semibold text-purple-800">Lokasi</label>
                    <input type="text" name="lokasi" class="w-full border rounded px-4 py-2" placeholder="Contoh: Gedung Utama">

                    <label class="block mt-4 mb-1 font-semibold text-purple-800">Deskripsi</label>
                    <textarea name="deskripsi" rows="4" class="w-full border rounded px-4 py-2" placeholder="Tuliskan deskripsi singkat..."></textarea>
                </div>
                <div>
                    <label class="block mb-1 font-semibold text-purple-800">Foto Fasilitas</label>
                    <input type="file" name="foto" class="w-full border rounded px-4 py-2 bg-gray-50">
                </div>
            </div>
            <div class="mt-6 text-right">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>

        {{-- Tabel Fasilitas Dipublish --}}
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-purple-900 mb-4">Fasilitas yang Dipublish</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left border rounded shadow">
                    <thead class="bg-purple-100 text-purple-900">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Contoh baris data --}}
                        <tr class="border-t">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Ruang Musik</td>
                            <td class="px-4 py-2">Arcamanik</td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Tabel Semua Fasilitas --}}
        <div class="mb-10">
            <h3 class="text-xl font-semibold text-purple-900 mb-4">Semua Data Fasilitas</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left border rounded shadow">
                    <thead class="bg-purple-100 text-purple-900">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Lokasi</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Perpustakaan</td>
                            <td class="px-4 py-2">Lantai 1</td>
                            <td class="px-4 py-2">Dipublish</td>
                            <td class="px-4 py-2">
                                <div class="relative inline-block text-left">
                                    <button type="button" onclick="openModal('1')" class="text-blue-600 hover:underline focus:outline-none">
                                        <i class="uil uil-edit-alt text-lg"></i>
                                    </button>

                                    <div class="dropdown-menu absolute z-10 mt-2 w-40 bg-white rounded-md shadow-lg border hidden">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Unpublish</a>
                                        <a href="#" class="block px-4 py-2 hover:bg-red-100 text-red-600">Hapus</a>
                                    </div>
                                </div>
                            </td>`
                        </tr>
                    </tbody>
                </table>
                <!-- Modal Popup Aksi -->
                <div id="modal-1" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
                    <div class="bg-white rounded-lg shadow-xl w-80 p-6 relative">
                        <h3 class="text-lg font-semibold text-purple-900 mb-4">Aksi Fasilitas</h3>
                        <div class="space-y-3">
                            <a href="#" class="block w-full text-left px-4 py-2 bg-gray-100 rounded hover:bg-gray-200 text-gray-800">Unpublish</a>
                            <a href="#" class="block w-full text-left px-4 py-2 bg-red-100 rounded hover:bg-red-200 text-red-600">Hapus</a>
                        </div>
                        <button onclick="closeModal('1')" class="absolute top-2 right-3 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
