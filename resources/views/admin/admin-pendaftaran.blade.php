@extends('layouts.admin')
@section('content')
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
@include('components.admin-sidenav')
<div class="ml-0 md:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Data Pendaftaran</h2>

    {{-- Search, Sort, Filter --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
        <div class="flex items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Filter & Pencarian Data</h3>
        </div>
        
        <form method="GET" class="space-y-4">
            {{-- Baris pertama: Pencarian --}}
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Cari Nama atau ID</label>
                    <input 
                        type="text" 
                        id="search"
                        name="search" 
                        value="{{ request('search') }}" 
                        placeholder="Masukkan nama atau ID pendaftar..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        aria-describedby="search-help"
                    >
                    <p id="search-help" class="mt-1 text-sm text-gray-500">Pencarian berdasarkan nama anak atau ID pendaftaran</p>
                </div>
            </div>

            {{-- Baris kedua: Filter Status dan Lokasi --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status Pendaftaran</label>
                    <select 
                        id="status"
                        name="status" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        aria-describedby="status-help"
                    >
                        <option value="">Semua Status</option>
                        <option value="345" @selected(request('status')=='345')>Butuh Aksi</option>
                        <option value="1" @selected(request('status')=='1')>Mengisi Data Orang Tua</option>
                        <option value="2" @selected(request('status')=='2')>Memilih Program</option>
                        <option value="3" @selected(request('status')=='3')>Pembayaran Pendaftaran</option>
                        <option value="4" @selected(request('status')=='4')>Wawancara & Asesmen</option>
                        <option value="5" @selected(request('status')=='5')>Pembayaran Pendidikan</option>
                        <option value="6" @selected(request('status')=='6')>Pembayaran</option>
                        <option value="7" @selected(request('status')=='7')>Data Sudah Lengkap</option>
                        <option value="30" @selected(request('status')=='30')>Ditolak Saat Pembayaran 1</option>
                        <option value="40" @selected(request('status')=='40')>Ditolak Saat Wawancara</option>
                        <option value="50" @selected(request('status')=='50')>Ditolak Saat Pembayaran Pendidikan</option>
                    </select>
                    <p id="status-help" class="mt-1 text-sm text-gray-500">Filter berdasarkan status pendaftaran</p>
                </div>

                <div>
                    <label for="filter-lokasi" class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
                    <select 
                        id="filter-lokasi"
                        name="lokasi" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        aria-describedby="lokasi-help"
                    >
                        <option value="">Semua Lokasi</option>
                        @foreach($listLokasi as $lokasi)
                            <option value="{{ $lokasi->id }}" @selected(request('lokasi') == $lokasi->id)>{{ $lokasi->name }}</option>
                        @endforeach
                    </select>
                    <p id="lokasi-help" class="mt-1 text-sm text-gray-500">Filter berdasarkan lokasi program</p>
                </div>
            </div>

            {{-- Baris ketiga: Program dan Pengaturan Tampilan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label for="filter-program" class="block text-sm font-medium text-gray-700 mb-2">Program</label>
                    <select 
                        id="filter-program"
                        name="program" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        aria-describedby="program-help"
                    >
                        <option value="">Semua Program</option>
                        @foreach($listProgram as $program)
                            <option value="{{ $program->id }}" data-lokasi="{{ $program->rombel_location_ids ?? '' }}" @selected(request('program') == $program->id)>
                                {{ $program->name }}
                            </option>
                        @endforeach
                    </select>
                    <p id="program-help" class="mt-1 text-sm text-gray-500">Filter berdasarkan program</p>
                </div>

                <div>
                    <label for="sort" class="block text-sm font-medium text-gray-700 mb-2">Urutkan Berdasarkan</label>
                    <select 
                        id="sort"
                        name="sort" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    >
                        <option value="created_at" @selected(request('sort')=='created_at')>Tanggal Daftar</option>
                        <option value="unique_id" @selected(request('sort')=='unique_id')>ID</option>
                        <option value="status" @selected(request('sort')=='status')>Status Pendaftaran</option>
                    </select>
                </div>

                <div>
                    <label for="dir" class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
                    <select 
                        id="dir"
                        name="dir" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    >
                        <option value="desc" @selected(request('dir')=='desc')>Terbaru</option>
                        <option value="asc" @selected(request('dir')=='asc')>Terlama</option>
                    </select>
                </div>

                <div>
                    <label for="per_page" class="block text-sm font-medium text-gray-700 mb-2">Data per Halaman</label>
                    <select 
                        id="per_page"
                        name="per_page" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    >
                        @foreach([5, 10, 20, 50, 100] as $limit)
                            <option value="{{ $limit }}" @selected(request('per_page', 10) == $limit)>{{ $limit }} data</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Tombol Action --}}
            <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-200">
                <button 
                    type="submit" 
                    class="inline-flex items-center justify-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm hover:shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                    Terapkan Filter
                </button>
                
                <a 
                    href="{{ request()->url() }}" 
                    class="inline-flex items-center justify-center px-6 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg shadow-sm hover:shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                >
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                    </svg>
                    Reset Filter
                </a>
            </div>
        </form>
    </div>

    {{-- Tambah kolom Program & Lokasi di tabel --}}
    <div class="overflow-x-auto overflow-hidden rounded-xl border-2 border-gray-200">
      <table class="w-full divide-y divide-gray-200 text-sm font-['Poppins']">
        <thead>
          <tr>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">ID</th>
            <th class="px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Nama</th>
            <th class="px-4 lg:px-8 py-4 w-40 whitespace-normal break-words text-left font-semibold capitalize">Program</th>
            <th class="px-4 lg:px-8 py-4 w-40 whitespace-normal break-words text-left font-semibold capitalize">Lokasi</th>
            <th class="hidden md:table-cell px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Tanggal Daftar</th>
            <th class="hidden sm:table-cell px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Status Pendaftaran</th>
            <th class="px-4 lg:px-8 py-4 min-w-28 lg:min-w-56 text-left font-semibold capitalize">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
          @foreach ($pendaftar as $daftar)
            <tr class="hover:bg-gray-100">
              <td class="px-8 py-2">
                <button type="button" class="toggle-detail font-bold text-blue-700 hover:underline" data-id="{{ $daftar->unique_id }}">
                  {{ $daftar->unique_id }}
                </button>
              </td>
              <td class="px-4 lg:px-8 py-2">{{ $daftar->child->nama }}</td>
              <td class="px-4 lg:px-8 py-2">{{ $daftar->rombel->program->name ?? '-' }}</td>
              <td class="px-4 lg:px-8 py-2">{{ $daftar->rombel->location->name ?? '-' }}</td>
              <td class="hidden md:table-cell px-4 lg:px-8 py-2">{{ $daftar->child->created_at }}</td>
              <td class="hidden sm:table-cell px-4 lg:px-8 py-2">
                <div class="px-2 lg:px-4 py-2 text-center rounded-lg text-xs lg:text-sm
                    @if($daftar->status == 1) bg-yellow-200 text-yellow-800
                    @elseif($daftar->status == 2) bg-blue-200 text-blue-800
                    @elseif($daftar->status == 3) bg-orange-200 text-orange-800
                    @elseif($daftar->status == 4) bg-purple-200 text-purple-800
                    @elseif($daftar->status == 5) bg-teal-200 text-teal-800
                    @elseif($daftar->status == 6) bg-cyan-200 text-cyan-800
                    @elseif($daftar->status == 7) bg-pink-200 text-pink-800
                    @elseif($daftar->status == 30 || $daftar->status == 40 || $daftar->status == 50) bg-red-200 text-red-800
                    @else bg-gray-200 text-gray-700 @endif">
                  {{ $daftar->status_label }}
                </div>
              </td>
              <td class="px-4 lg:px-8 py-2">
                <div class="flex flex-col gap-2">
                    @if (in_array($daftar->status, [3, 4, 5]))
                        <div class="flex flex-col lg:flex-row gap-1">
                            {{-- Tombol Terima --}}
                            <form action="{{ route('pendaftar.terima', $daftar->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="w-full px-2 lg:px-4 py-2 bg-[#00BD03] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer text-xs lg:text-sm">
                                    Terima
                                </button>
                            </form>

                            {{-- Tombol Tolak --}}
                            <form action="{{ route('pendaftar.tolak', $daftar->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="w-full px-2 lg:px-4 py-2 bg-[#FF0000] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 cursor-pointer text-xs lg:text-sm">
                                    Tolak
                                </button>
                            </form>
                        </div>
                    @endif

                    {{-- ke halaman detail pendaftaran --}}
                    <a href="/detail-pendaftaran/{{ $daftar->unique_id }}"> 
                      <div class="px-2 lg:px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer text-xs lg:text-sm">
                        Lihat Detail
                      </div>
                    </a>
                </div>
              </td>
            </tr>
            {{-- Baris detail tersembunyi --}}
            <tr class="detail-row" id="detail-{{ $daftar->unique_id }}" style="display: none;">
              <td colspan="7" class="bg-gray-50 px-4 py-4 border-t border-b border-gray-200">
                <table class="w-full text-sm text-gray-700 border-separate" style="border-spacing:0 0.25rem;">
                  <tr>
                    <td class="font-semibold py-1 pr-2 w-36">Nama Anak</td>
                    <td class="py-1 pr-4">{{ $daftar->child->nama }}</td>
                  </tr>
                  <tr>
                    <td class="font-semibold py-1 pr-2">NIK Anak</td>
                    <td class="py-1 pr-4">{{ $daftar->child->nik }}</td>
                  </tr>
                  <tr>
                    <td class="font-semibold py-1 pr-2">Tanggal Lahir</td>
                    <td class="py-1 pr-4">{{ $daftar->child->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                    <td class="font-semibold py-1 pr-2">Jenis Kelamin</td>
                    <td class="py-1 pr-4">{{ $daftar->child->jk == 'L' ? 'Laki-laki' : ($daftar->child->jk == 'P' ? 'Perempuan' : '-') }}</td>
                  </tr>
                  <tr>
                    <td class="font-semibold py-1 pr-2">Nama Ibu</td>
                    <td class="py-1 pr-4">{{ $daftar->child->mom->name ?? '-' }}</td>
                  </tr>
                  <tr>
                    <td class="font-semibold py-1 pr-2">Nama Ayah</td>
                    <td class="py-1 pr-4">{{ $daftar->child->dad->name ?? '-' }}</td>
                  </tr>
                  {{-- Tambahkan data lain yang ingin ditampilkan di sini --}}
                </table>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="mt-4">
        {{ $pendaftar->links() }}
    </div>
</div>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.toggle-detail').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var id = this.getAttribute('data-id');
        var row = document.getElementById('detail-' + id);

        // Jika baris ini sedang terbuka, tutup (slide up)
        if (row.style.display !== 'none' && row.style.maxHeight !== '0px') {
            row.style.transition = 'max-height 0.3s cubic-bezier(.4,0,.2,1), opacity 0.3s';
            row.style.maxHeight = row.scrollHeight + 'px'; // set to current height for transition
            setTimeout(function() {
                row.style.maxHeight = '0';
                row.style.opacity = '0';
            }, 10);
            setTimeout(function() {
                row.style.display = 'none';
            }, 310);
            return;
        }

        // Tutup semua detail lain (slide up)
        document.querySelectorAll('.detail-row').forEach(function(r) {
            if (r !== row && r.style.display !== 'none' && r.style.maxHeight !== '0px') {
                r.style.transition = 'max-height 0.3s cubic-bezier(.4,0,.2,1), opacity 0.3s';
                r.style.maxHeight = r.scrollHeight + 'px';
                setTimeout(function() {
                    r.style.maxHeight = '0';
                    r.style.opacity = '0';
                }, 10);
                setTimeout(function() {
                    r.style.display = 'none';
                }, 310);
            }
        });

        // Buka baris yang dipilih (slide down)
        row.style.display = '';
        row.style.overflow = 'hidden';
        row.style.opacity = '0';
        row.style.maxHeight = '0';
        setTimeout(function() {
            row.style.transition = 'max-height 0.3s cubic-bezier(.4,0,.2,1), opacity 0.3s';
            row.style.maxHeight = row.scrollHeight + 'px';
            row.style.opacity = '1';
        }, 10);
        setTimeout(function() {
            row.style.maxHeight = '1000px'; // biar responsif, bisa diganti sesuai kebutuhan
        }, 320);
    });
});

// Set semua detail-row ke display:none dan maxHeight:0 saat load
document.querySelectorAll('.detail-row').forEach(function(r) {
    r.style.display = 'none';
    r.style.overflow = 'hidden';
    r.style.maxHeight = '0';
    r.style.opacity = '0';
});

// Filter program sesuai lokasi yang dipilih
document.getElementById('filter-lokasi').addEventListener('change', function() {
    this.form.submit();
});
</script>
@endpush