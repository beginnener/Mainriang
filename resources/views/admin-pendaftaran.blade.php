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
            <option value="1" @selected(request('status')=='1')>Mengisi Data Orang Tua</option>
            <option value="2" @selected(request('status')=='2')>Memilih Program</option>
            <option value="3" @selected(request('status')=='3')>Pembayaran Pendaftaran</option>
            <option value="4" @selected(request('status')=='4')>Wawancara & Asesmen</option>
            <option value="5" @selected(request('status')=='5')>Konfirmasi Data Pendaftaran</option>
            <option value="6" @selected(request('status')=='6')>Pembayaran</option>
            <option value="7" @selected(request('status')=='7')>Pembayaran Pendidikan</option>
            <option value="8" @selected(request('status')=='8')>Konfirmasi Pembayaran</option>
            <option value="9" @selected(request('status')=='9')>Diterima</option>
            <option value="30" @selected(request('status')=='30')>Ditolak Saat Pembayaran 1</option>
            <option value="40" @selected(request('status')=='40')>Ditolak Saat Wawancara</option>
            <option value="70" @selected(request('status')=='70')>Ditolak Saat Pembayaran Pendidikan</option>
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
        <button type="submit" class="px-6 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
            Cari / Filter
        </button>
    </form>

    <div class="overflow-x-auto overflow-hidden rounded-xl border-2 border-gray-200">
      <table class="w-full divide-y divide-gray-200 text-sm font-['Poppins']">
        <thead class="">
          <tr>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">ID</th>
            <th class="px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Nama</th>
            <th class="hidden md:table-cell px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Tanggal Daftar</th>
            <th class="hidden sm:table-cell px-4 lg:px-8 py-4 w-full lg:w-72 whitespace-normal break-words text-left font-semibold capitalize">Status Pendaftaran</th>
            <th class="px-4 lg:px-8 py-4 min-w-28 lg:min-w-56 text-left font-semibold capitalize">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
          @foreach ($pendaftar as $daftar)
            <tr class="hover:bg-gray-100">
              <td class="px-8 py-2">{{ $daftar->unique_id }}</td>
              <td class="px-4 lg:px-8 py-2">{{ $daftar->child->nama }}</td>
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
                    @elseif($daftar->status == 8) bg-green-200 text-green-800
                    @elseif($daftar->status == 9) bg-green-400 text-white
                    @elseif($daftar->status == 20 || $daftar->status == 80 || $daftar->status == 50) bg-red-200 text-red-800
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
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection