@extends('layouts.admin')

@section('content')
<div class="flex ml-0 md:ml-[250px] ">
    {{-- Konten Utama --}}
    <div class="p-6 w-full font-['Poppins']">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Testimoni</h2>
            <button onclick="openModal()" class="bg-purple-100 text-purple-900 px-4 py-2 rounded hover:bg-purple-700 hover:text-white transition duration-300">
                + Tambah Testimoni
            </button>

        </div>

        {{-- Daftar Testimoni --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Contoh testimoni --}}
            <div class="bg-white rounded-lg shadow-md p-4 relative">
                <div class="flex items-center mb-3">
                    <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-full mr-3" alt="Foto">
                    <div>
                        <p class="font-semibold text-gray-900">Siti Andini</p>
                        <p class="text-sm text-gray-600">Orang tua Murid</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-3">"Anak saya sangat menikmati kegiatan di sini. Terima kasih!"</p>
                <button class="absolute bottom-4 right-4 text-purple-600 hover:text-purple-800">
                    <i class="uil uil-edit-alt text-lg"></i>
                </button>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 relative">
                <div class="flex items-center mb-3">
                    <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-full mr-3" alt="Foto">
                    <div>
                        <p class="font-semibold text-gray-900">Siti Andini</p>
                        <p class="text-sm text-gray-600">Orang tua Murid</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-3">"Anak saya sangat menikmati kegiatan di sini. Terima kasih!"</p>
                <button class="absolute bottom-4 right-4 text-purple-600 hover:text-purple-800">
                    <i class="uil uil-edit-alt text-lg"></i>
                </button>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 relative">
                <div class="flex items-center mb-3">
                    <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-full mr-3" alt="Foto">
                    <div>
                        <p class="font-semibold text-gray-900">Siti Andini</p>
                        <p class="text-sm text-gray-600">Orang tua Murid</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-3">"Anak saya sangat menikmati kegiatan di sini. Terima kasih!"</p>
                <button class="absolute bottom-4 right-4 text-purple-600 hover:text-purple-800">
                    <i class="uil uil-edit-alt text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tambah Testimoni --}}
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white rounded-lg w-full max-w-lg p-6 relative">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tambah Testimoni</h3>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block font-medium text-gray-900">Nama Orang Tua</label>
                    <input type="text" name="nama" class="w-full border rounded px-4 py-2" placeholder="Nama orang tua">
                </div>
                <div>
                    <label class="block font-medium text-gray-900">Nama Anak</label>
                    <input type="text" name="nama_anak" class="w-full border rounded px-4 py-2" placeholder="Nama anak">
                </div>
                <div>
                    <label class="block font-medium text-gray-900">Isi Testimoni</label>
                    <textarea name="isi" rows="3" class="w-full border rounded px-4 py-2" placeholder="Tuliskan testimoni..."></textarea>
                </div>
                <div>
                    <label class="block font-medium text-gray-900">Foto</label>
                    <input type="file" name="foto" class="w-full border rounded px-4 py-2 bg-gray-50">
                </div>
                <div>
                    <label class="block font-medium text-gray-900">Status</label>
                    <select name="status" class="w-full border rounded px-4 py-2">
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
            </div>
            <div class="mt-6 flex justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Simpan</button>
            </div>
        </form>
        <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-600 text-xl hover:text-gray-800">&times;</button>
    </div>
</div>
@endsection

@push('scripts')