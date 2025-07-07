@extends('layouts.admin')
@section('content')
@if (session('success'))
    <div class="bg-green-200 text-green-800 p-2 rounded">
        {{ session('success') }}
    </div>
@endif
@include('components.admin-sidenav')
<div class="ml-0 lg:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)]">
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
                <div class="px-2 lg:px-4 py-2 text-center bg-blue-200 rounded-lg text-xs lg:text-sm">
                  {{ $daftar->status_label }}
                </div>
              </td>
              <td class="px-4 lg:px-8 py-2">
                <div class="flex flex-col gap-2">
                    {{-- ke halaman detail pendaftaran --}}
                    <a href="/detail-pendaftaran/{{ $daftar->unique_id }}"> 
                      <div class="px-2 lg:px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer text-xs lg:text-sm">
                        Lihat Detail
                      </div>
                    </a>
                    
                    @if (in_array($daftar->status, [2, 5, 6, 8]))
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
                </div>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection