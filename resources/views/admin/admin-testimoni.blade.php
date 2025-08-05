@extends('layouts.admin')

@section('content')
<div class="flex">
    {{-- Sidebar --}}
    <div class="w-64 fixed h-screen">
        @include('components.admin-sidenav')
    </div>

    {{-- Konten Utama --}}
    <div class="ml-64 p-6 w-full font-['Poppins']">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-purple-900">Testimoni</h2>
            <button onclick="openModal()" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                + Tambah Testimoni
            </button>
        </div>

        {{-- Daftar Testimoni --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonis as $testimoni)
            <div class="bg-white rounded-lg shadow-md p-4 relative">
                <div class="flex items-center mb-3">
                    <img src="{{ $testimoni->foto ? asset('storage/' . $testimoni->foto) : 'https://via.placeholder.com/50' }}"
                        class="w-12 h-12 rounded-full mr-3" alt="Foto">
                    <div>
                        <p class="font-semibold text-purple-900">{{ $testimoni->nama }}</p>
                        <p class="text-sm text-gray-600">{{ $testimoni->nama_anak ?? 'Orang Tua Murid' }}</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-3">"{{ $testimoni->isi }}"</p>

                {{-- Tombol Edit --}}
                <button
                    onclick="editTestimoni(this)"
                    class="absolute bottom-4 right-12 text-purple-600 hover:text-purple-800"
                    data-id="{{ $testimoni->id }}"
                >
                    <i class="uil uil-edit-alt text-lg"></i>
                </button>

                {{-- Tombol Hapus --}}
                <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="absolute bottom-4 right-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:text-red-800">
                        <i class="uil uil-trash-alt text-lg"></i>
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Modal Tambah/Edit Testimoni --}}
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white rounded-lg w-full max-w-lg p-6 relative">
        <h3 class="text-xl font-semibold text-purple-900 mb-4">Form Testimoni</h3>
        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block font-medium text-purple-800">Nama</label>
                    <input type="text" name="nama" class="w-full border rounded px-4 py-2" placeholder="Nama" required>
                </div>
                <div>
                    <label class="block font-medium text-purple-800">Nama Anak</label>
                    <input type="text" name="nama_anak" class="w-full border rounded px-4 py-2" placeholder="Nama anak">
                </div>
                <div>
                    <label class="block font-medium text-purple-800">Isi Testimoni</label>
                    <textarea name="isi" rows="3" class="w-full border rounded px-4 py-2" placeholder="Tuliskan testimoni..." required></textarea>
                </div>
                <div>
                    <label class="block font-medium text-purple-800">Foto</label>
                    <input type="file" name="foto" accept="image/png, image/jpeg" class="w-full border rounded px-4 py-2 bg-gray-50">
                </div>
                <div>
                    <label class="block font-medium text-purple-800">Status</label>
                    <select name="status" class="w-full border rounded px-4 py-2" required>
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
<script>
function openModal() {
    const form = document.querySelector('#modal form');
    form.reset();
    form.action = '{{ route('testimoni.store') }}';

    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) {
        methodInput.remove();
    }

    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
    openModal(); // reset form sekalian
}

function editTestimoni(button) {
    const id = button.dataset.id;

    fetch(`/admin/dashboard/testimoni/${id}/edit`)
        .then(res => res.json())
        .then(data => {
            const form = document.querySelector('#modal form');
            form.action = `/admin/dashboard/testimoni/${id}`;

            form.querySelector('input[name="nama"]').value = data.nama;
            form.querySelector('input[name="nama_anak"]').value = data.nama_anak || '';
            form.querySelector('textarea[name="isi"]').value = data.isi;
            form.querySelector('select[name="status"]').value = data.status;
            form.querySelector('input[name="foto"]').value = ''; // reset file input

            let methodInput = form.querySelector('input[name="_method"]');
            if (!methodInput) {
                methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);
            } else {
                methodInput.value = 'PUT';
            }

            document.getElementById('modal').classList.remove('hidden');
        })
        .catch(err => {
            alert('Gagal mengambil data.');
            console.error(err);
        });
}
</script>
@endpush
