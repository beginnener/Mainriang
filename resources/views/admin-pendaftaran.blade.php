@extends('layouts.admin')
@section('content')
@if (session('success'))
    <div class="bg-green-200 text-green-800 p-2 rounded">
        {{ session('success') }}
    </div>
@endif
<div class="flex flex-row">
  @include('components.admin-sidenav')
  <div class="p-8">
    <div class="overflow-x-auto overflow-hidden rounded-xl border-2 border-gray-200">
      <table class="max-w-full divide-y divide-gray-200 text-sm font-['Poppins']">
        <thead class="">
          <tr>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">ID</th>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Nama</th>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Tanggal Daftar</th>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Status Pendaftaran</th>
            <th class="px-8 py-4 min-w-56 text-left font-semibold capitalize"></th>
            <th class="px-8 py-4 min-w-56 text-left font-semibold capitalize"></th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
          @foreach ($pendaftar as $daftar)
            <tr class="hover:bg-gray-100">
              <td class="px-8 py-2">{{ $daftar->unique_id }}</td>
              <td class="px-8 py-2">{{ $daftar->child->nama }}</td>
              <td class="px-8 py-2">{{ $daftar->child->created_at }}</td>
              <td class="px-8 py-2">
                <div class="px-4 py-2 text-center bg-blue-200 rounded-lg">
                  {{ $daftar->status_label }}
                </div>
              </td>
              <td class="px-8 py-2">
                {{-- ke halaman detail pendaftaran --}}
                <a href="/detail-pendaftaran/{{ $daftar->unique_id }}"> 
                  <div class="px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer">
                    Lihat Detail
                  </div>
                </a>
              </td>
              <td class="px-8 py-2">
                <div class="flex flex-col gap-1">
                    @if (in_array($daftar->status, [2, 5, 6, 8]))
                        {{-- Tombol Terima --}}
                        <form action="{{ route('pendaftar.terima', $daftar->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="w-full px-4 py-2 bg-[#00BD03] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                                Terima
                            </button>
                        </form>

                        {{-- Tombol Tolak --}}
                        <form action="{{ route('pendaftar.tolak', $daftar->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="w-full px-4 py-2 bg-[#FF0000] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 cursor-pointer">
                                Tolak
                            </button>
                        </form>
                    @endif
                </div>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection