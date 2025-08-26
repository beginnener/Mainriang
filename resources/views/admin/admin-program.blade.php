@extends('layouts.admin')
@section('content')
<div class="ml-0 md:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Manajemen Program & Lokasi</h2>

    {{-- Flash Message --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @elseif (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <section id="tambah-lokasi">
        {{-- Form Tambah Lokasi --}}
        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                    Tambah Lokasi Sekolah
                </h3>
            </div>
            <div class="p-6">
                <form method="POST" action="{{ route('admin-program-storeLocation') }}">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-2">
                            <label for="nama_lokasi" class="block text-sm font-medium text-gray-700 mb-2">Nama Lokasi</label>
                            <input type="text" name="nama_lokasi" id="nama_lokasi" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200"
                                placeholder="Masukkan nama lokasi sekolah...">
                            <label for="alamat_lokasi" class="block text-sm font-medium text-gray-700 mb-2">Alamat Lokasi</label>
                            <input type="text" name="alamat_lokasi" id="alamat_lokasi" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200"
                                placeholder="Masukkan alamat lokasi sekolah...">
                        </div>
                        <div class="flex items-end">
                            <button type="submit"
                            class="w-full px-6 py-2 bg-purple-100 hover:bg-purple-200 text-purple-800 font-medium rounded-lg shadow-sm hover transition duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                Tambah Lokasi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="px-6 py-4 border-y border-gray-200">
                <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                    Daftar Lokasi Sekolah
                </h3>
            </div>
            <div class="p-6">
                <div class="bg-white rounded-xl overflow-hidden border border-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">ID</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Nama Lokasi</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Alamat</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($listLocation as $lokasi)
                                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                                        <td class="px-6 py-3 text-gray-600">{{ $lokasi->id }}</td>
                                        <td class="px-6 py-3 text-gray-800 font-medium">{{ $lokasi->name }}</td>
                                        <td class="px-6 py-3 text-gray-800 font-medium">{{ $lokasi->address }}</td>
                                        <td class="px-6 py-3">
                                            {{-- Tombol Edit --}}
                                            <button type="button"
                                                onclick="showEditModal({{ $lokasi->id }}, '{{ $lokasi->name }}', '{{ $lokasi->address}}')"
                                                class="inline-flex items-center px-3 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 text-sm font-medium rounded-lg transition duration-200 mr-2">
                                                Edit
                                            </button>
                                            {{-- Tombol Hapus --}}
                                            <form action="{{ route('admin-location.destroy', $lokasi->id) }}" method="POST" onsubmit="return confirm('Hapus lokasi ini?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-sm font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if ($listLocation->isEmpty())
                                    <tr>
                                        <td colspan="3" class="px-6 py-8 text-center text-gray-500">
                                            <div class="flex flex-col items-center">
                                                Belum ada lokasi yang terdaftar
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tabel Lokasi --}}
    </section>

    <section id="tambah-program">
        {{-- Form Tambah Program --}}
        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                    Tambah Program Sekolah
                </h3>
            </div>
            <div class="p-6">
                <form method="POST" action="{{ route('admin-program-storeProgram') }}">
                    @csrf
        
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        {{-- Dropdown Pilih Lokasi --}}
                        <div>
                            <label for="lokasi_id" class="block text-sm font-medium text-gray-700 mb-2">Pilih Lokasi</label>
                            <select name="lokasi_id" id="lokasi_id"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">
                                <option value="">-- Pilih Lokasi --</option>
                                @foreach($listLocation as $lokasi)
                                    <option value="{{ $lokasi->id }}" @selected(request('lokasi_id') == $lokasi->id)>
                                        {{ $lokasi->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
        
                        {{-- Input Nama Program --}}
                        <div>
                            <label for="nama_program" class="block text-sm font-medium text-gray-700 mb-2">Nama Program</label>
                            <input type="text" name="nama_program" id="nama_program" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200"
                                placeholder="Masukkan nama program...">
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="flex items-end">
                            <button type="submit"
                                class="w-full px-6 py-2 bg-purple-100 hover:bg-purple-200 text-purple-800 font-medium rounded-lg shadow-sm hover:shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                Tambah Program
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            {{-- Filter dan Daftar Program --}}
            <div class="px-6 py-4 border-y border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-700 flex items-center mb-4">
                    Filter Program
                </h3>
                
                <form method="GET" class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <label for="lokasi_program" class="block text-sm font-medium text-gray-700 mb-2">Pilih Lokasi</label>
                        <select name="lokasi_program" id="lokasi_program"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200"
                            onchange="this.form.submit()">
                            <option value="">-- Semua Lokasi --</option>
                            @foreach($listLocation as $lokasi)
                                <option value="{{ $lokasi->id }}" @selected(request('lokasi_program') == $lokasi->id)>{{ $lokasi->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>

            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-700 flex items-center">
                    Daftar Program di {{ request('lokasi_program') ? $listLocation->find(request('lokasi_program'))->name ?? 'Lokasi Terpilih' : 'Semua Lokasi' }}
                </h3>
            </div>
            <div class="p-6">
                <div class="bg-white rounded-xl overflow-hidden border border-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">ID</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Nama Program</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Lokasi</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border-b border-gray-200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @php
                                    $filteredPrograms = request('lokasi_program') 
                                        ? $listProgram->where('location_id', request('lokasi_program')) 
                                        : $listProgram;
                                @endphp
                                @foreach($filteredPrograms as $program)
                                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                                        <td class="px-6 py-3 text-gray-600">{{ $program->id }}</td>
                                        <td class="px-6 py-3 text-gray-800 font-medium">{{ $program->Program->name }}</td>
                                        <td class="px-6 py-3 text-gray-600">{{ $program->location->name ?? '-' }}</td>
                                        <td class="px-6 py-3">
                                            <form action="{{ route('admin-program.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Hapus program ini?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-sm font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if ($filteredPrograms->isEmpty())
                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                                            <div class="flex flex-col items-center">
                                                {{ request('lokasi_program') ? 'Belum ada program di lokasi ini' : 'Belum ada program yang terdaftar' }}
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Edit Lokasi -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h3 class="text-lg font-semibold mb-4">Edit Lokasi</h3>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="edit_id">
            <div class="mb-4">
                <label for="edit_nama_lokasi" class="block text-sm font-medium text-gray-700 mb-2">Nama Lokasi</label>
                <input type="text" name="nama_lokasi" id="edit_nama_lokasi" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="edit_alamat_lokasi" class="block text-sm font-medium text-gray-700 mb-2">Alamat Lokasi</label>
                <input type="text" name="alamat_lokasi" id="edit_alamat_lokasi" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-200 rounded">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
function showEditModal(id, name, address) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_nama_lokasi').value = name;
    document.getElementById('edit_alamat_lokasi').value = address;
    document.getElementById('editForm').action = '/admin/dashboard/location/' + id;
    document.getElementById('editModal').classList.remove('hidden');
}
function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}
</script>
@endpush
</div>
@endsection
