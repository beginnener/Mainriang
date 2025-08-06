@extends('layouts.admin')

@section('content')
<div class="flex">
    <div class="ml-0 md:ml-[250px] p-6 w-full font-['Poppins']">
        <h2 class="text-2xl font-bold text-purple-900 mb-6">Manajemen Fasilitas</h2>

        {{-- Form Tambah Fasilitas --}}
        <form action="{{ route('admin-fasilitas.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md mb-10 border border-purple-200">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-1 font-semibold text-purple-800">Nama Fasilitas</label>
                    <input type="text" name="name" class="w-full border rounded px-4 py-2" placeholder="Contoh: Ruang Kelas A">

                    <label class="block mt-4 mb-1 font-semibold text-purple-800">Lokasi</label>
                    <select name="location_id" id="location_id" class="w-full border rounded px-4 py-2">
                        <option value="">Pilih Lokasi</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>

                    <label class="block mt-4 mb-1 font-semibold text-purple-800">Deskripsi</label>
                    <textarea name="description" rows="4" class="w-full border rounded px-4 py-2" placeholder="Tuliskan deskripsi singkat..."></textarea>

                    <label for="status" class="block mt-4 mb-1 font-semibold text-purple-800">Status</label>
                    <select name="status" id="status" class="w-full border rounded px-4 py-2">
                        <option value="draf">Draf</option>
                        <option value="publish">Publish</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-semibold text-purple-800">Foto Fasilitas</label>
                    <input type="file" name="image" class="w-full border rounded px-4 py-2 bg-gray-50" accept="image/*">
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
                        @foreach ($facilities->where('status', 'publish') as $facility)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $facility->name }}</td>
                                <td class="px-4 py-2">{{ $facility->location->name ?? 'Tidak Diketahui' }}</td>
                            </tr>
                        @endforeach
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
                            <th class="px-4 py-2">Foto</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Lokasi</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($facilities as $facility)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">
                                    @if ($facility->image)
                                        <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->name }}" class="w-16 h-16 object-cover rounded">
                                    @else
                                        <span class="text-gray-500 italic">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2">{{ $facility->name }}</td>
                                <td class="px-4 py-2">{{ $facility->location->name ?? '-' }}</td>
                                <td class="px-4 py-2">{{ $facility->status}}</td>
                                <td class="px-4 py-2 space-x-2">
                                    {{-- Tombol Edit --}}
                                    <button onclick="openEditModal({{ $facility->id }})" class="text-blue-600 hover:underline">Edit</button>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('admin-fasilitas.destroy', $facility->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Modal Edit (Satu modal, isiannya akan diganti lewat JS) --}}
                <div id="editModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
                    <div class="bg-white rounded-lg shadow-xl w-full max-w-xl p-6 relative">
                        <h3 class="text-lg font-semibold text-purple-900 mb-4">Edit Fasilitas</h3>

                        <form id="editForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" id="edit_id">

                            <label class="block mb-1 font-semibold">Nama</label>
                            <input type="text" name="name" id="edit_name" class="w-full border rounded px-3 py-2 mb-3">

                            <label class="block mb-1 font-semibold">Lokasi</label>
                            <select name="location_id" id="edit_location_id" class="w-full border rounded px-3 py-2 mb-3">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>

                            <label class="block mb-1 font-semibold">Deskripsi</label>
                            <textarea name="description" id="edit_description" rows="3" class="w-full border rounded px-3 py-2 mb-3"></textarea>

                            <label class="block mb-1 font-semibold">Status</label>
                            <select name="status" id="edit_status" class="w-full border rounded px-3 py-2 mb-3">
                                <option value="draf">Draf</option>
                                <option value="publish">Publish</option>
                            </select>

                            <label class="block mb-1 font-semibold">Ganti Foto (Opsional)</label>
                            <input type="file" name="image" class="w-full border rounded px-3 py-2 bg-gray-50 mb-4">

                            <div class="flex justify-end space-x-2">
                                <button type="button" onclick="closeEditModal()" class="bg-gray-300 px-4 py-2 rounded">Batal</button>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                            </div>
                        </form>

                        <button onclick="closeEditModal()" class="absolute top-2 right-3 text-gray-600 text-xl">&times;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const facilities = @json($facilities);

    function openEditModal(id) {
        const modal = document.getElementById('editModal');
        const facility = facilities.find(f => f.id === id);

        if (!facility) return;

        document.getElementById('edit_id').value = facility.id;
        document.getElementById('edit_name').value = facility.name;
        document.getElementById('edit_description').value = facility.description ?? '';
        document.getElementById('edit_status').value = facility.status;
        document.getElementById('edit_location_id').value = facility.location_id ?? '';

        document.getElementById('editForm').action = `/admin/dashboard/fasilitas/${facility.id}`;

        modal.classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>

@endsection
