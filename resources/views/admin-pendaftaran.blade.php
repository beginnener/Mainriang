@extends('layouts.admin')
@section('content')
@if (session('success'))
    <div class="bg-green-200 text-green-800 p-2 rounded">
        {{ session('success') }}
    </div>
@endif
@include('components.admin-sidenav')
<div class="ml-0 lg:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">

    {{-- Search, Sort, Filter --}}
    <form method="GET" class="flex flex-col md:flex-row gap-2 mb-4 items-center">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Nama/ID"
            class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300 w-full md:w-64">
        <select name="status" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-48">
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

        {{-- Filter Lokasi --}}
        <select name="lokasi" id="filter-lokasi" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-48">
            <option value="">Semua Lokasi</option>
            @foreach($listLokasi as $lokasi)
                <option value="{{ $lokasi->id }}" @selected(request('lokasi') == $lokasi->id)>{{ $lokasi->name }}</option>
            @endforeach
        </select>

        {{-- Filter Program --}}
        <select name="program" id="filter-program" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-48">
            <option value="">Semua Program</option>
            @foreach($listProgram as $program)
                <option value="{{ $program->id }}" data-lokasi="{{ $program->rombel_location_ids ?? '' }}" @selected(request('program') == $program->id)>
                    {{ $program->name }}
                </option>
            @endforeach
        </select>

        <select name="sort" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-40">
            <option value="created_at" @selected(request('sort')=='created_at')>Tanggal Daftar</option>
            <option value="unique_id" @selected(request('sort')=='unique_id')>ID</option>
            <option value="status" @selected(request('sort')=='status')>Status Pendaftaran</option>
        </select>
        <select name="dir" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-32">
            <option value="desc" @selected(request('dir')=='desc')>Terbaru</option>
            <option value="asc" @selected(request('dir')=='asc')>Terlama</option>
        </select>
        <select name="per_page" class="px-4 py-2 rounded-full border border-gray-300 w-full md:w-32">
            @foreach([5, 10, 20, 50, 100] as $limit)
                <option value="{{ $limit }}" @selected(request('per_page', 10) == $limit)>Tampil {{ $limit }}</option>
            @endforeach
        </select>
        <button type="submit" class="px-6 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
            Cari / Filter
        </button>
    </form>

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