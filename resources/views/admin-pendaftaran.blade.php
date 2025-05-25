@extends('layouts.admin')
@section('content')
<div class="flex flex-row">
  @include('components.admin-sidenav')
  <div class="p-8">
    <div class="overflow-x-auto overflow-hidden rounded-xl border-2 border-gray-200">
      <table class="max-w-full divide-y divide-gray-200 text-sm font-['Poppins']">
        <thead class="">
          <tr>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Nama</th>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Tanggal Daftar</th>
            <th class="px-8 py-4 w-72 whitespace-normal break-words text-left font-semibold capitalize">Status Pendaftaran</th>
            <th class="px-8 py-4 min-w-56 text-left font-semibold capitalize"></th>
            <th class="px-8 py-4 min-w-56 text-left font-semibold capitalize"></th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
          <tr class="hover:bg-gray-100">
            <td class="px-8 py-2">Budi</td>
            <td class="px-8 py-2">3 Mei 2024</td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 text-center bg-blue-200 rounded-lg">
                Asesmen Psikolog
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer">
                  Lihat Detail
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="flex flex-col gap-1">
                <div class="px-4 py-2 bg-[#00BD03] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                    Terima
                </div>
                <div class="px-4 py-2 bg-[#FF0000] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 hover:text-white cursor-pointer">
                    Tolak
                </div>
              </div>
            </td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-8 py-2">Ani</td>
            <td class="px-8 py-2">3 Mei 2024</td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 text-center bg-green-200 rounded-lg">
                Menunggu Konfirmasi Pembayaran
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer">
                  Lihat Detail
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="flex flex-col gap-1">
                <div class="px-4 py-2 bg-[#00BD03] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                    Terima
                </div>
                <div class="px-4 py-2 bg-[#FF0000] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 hover:text-white cursor-pointer">
                    Tolak
                </div>
              </div>
            </td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-8 py-2">Agus</td>
            <td class="px-8 py-2">3 Mei 2024</td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 text-center bg-yellow-200 rounded-lg">
                Form Kedua
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="px-4 py-2 bg-white text-center border-2 border-gray-200 rounded-lg transition duration-200 hover:underline hover:text-blue-500 cursor-pointer">
                  Lihat Detail
              </div>
            </td>
            <td class="px-8 py-2">
              <div class="flex flex-col gap-1">
                <div class="px-4 py-2 bg-[#00BD03] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                    Terima
                </div>
                <div class="px-4 py-2 bg-[#FF0000] text-center text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 hover:text-white cursor-pointer">
                    Tolak
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection