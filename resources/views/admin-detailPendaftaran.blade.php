@extends('layouts.admin')
@section('content')
@php use Carbon\Carbon; @endphp
@include('components.admin-sidenav')
<div class="ml-0 lg:ml-[250px] p-4 lg:p-8 w-full lg:w-[calc(100vw-250px)] font-['Poppins']">
    <h2 class="mb-3 text-xl lg:text-2xl font-semibold text-purple-950">Detail Pendaftaran</h2>
        <div class="p-4 lg:p-8 border-2 border-purple-950 rounded-xl">
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-0">
                <div class="w-full lg:w-1/2">
                    {{-- informasi pendaftaran --}}
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Daftar</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->created_at ? \Carbon\Carbon::parse($pendaftar->created_at)->format('d/m/Y') : '-' }}</td>
                        </tr>
                        <tr class="items-center">
                            <td class="px-4 py-2 font-semibold border border-gray-600">Status Pendaftaran</td>
                            <td class="w-full px-4 py-2 border border-gray-600"> 
                                <div class="px-4 py-2 text-center bg-blue-200 rounded-lg">
                                    {{ $pendaftar->status_label ?? '-' }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Lokasi</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->rombel->location->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Program</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->rombel->program->name ?? '-' }}</td>
                        </tr>
                    </table>

                    {{-- informasi data anak --}}
                    <h3 class="mt-3 mb-2 text-xl font-semibold text-purple-950">Data Anak</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="flex-1 px-4 py-2 font-semibold border border-gray-600">Nama Anak</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->nama }}</td>
                        </tr>
                        <tr>
                            <td class="flex-1 px-4 py-2 font-semibold border border-gray-600">Nama Panggilan</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->nama_panggilan }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenis Kelamin</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->jk == 'P' ? 'Perempuan' : ($pendaftar->Child->jk == 'L' ? 'Laki-laki' : '-') }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">
                                {{ \Carbon\Carbon::parse($pendaftar->Child->tanggal_lahir)->format('d/m/Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Agama</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->agama }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">RT/RW</td>
                            <td class="px-4 py-2 border border-gray-600">
                                {{ str_pad($pendaftar->Child->RT, 3, '0', STR_PAD_LEFT) }}/{{ str_pad($pendaftar->Child->RW, 3, '0', STR_PAD_LEFT) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Dusun</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->dusun }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kelurahan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->kelurahan }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kecamatan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Kode Pos</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->kode_pos }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenis Tinggal</td>
                            <td class="px-4 py-2 border border-gray-600">{{ str_replace('_', ' ', $pendaftar->Child->jenis_tinggal) }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Alat Transportasi</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->alat_transportasi }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Berat Badan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->berat_badan }} kg</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tinggi Badan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->tinggi_badan }} cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Lingkar Kepala</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->lingkar_kepala }} cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jumlah Saudara</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->jumlah_saudara }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Anak Keberapa</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->anak_keberapa }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jarak ke Sekolah</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->jarak_ke_sekolah }} km</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Lintang</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->lintang }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Bujur</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->bujur }}</td>
                        </tr>
                    </table>

                    {{-- informasi data ortu --}}
                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Ibu</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Ibu</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->name ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Alamat Ibu</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->alamat ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->tempat_lahir ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">
                                {{ optional($pendaftar->Child->Mom)->tanggal_lahir ? \Carbon\Carbon::parse($pendaftar->Child->Mom->tanggal_lahir)->format('d/m/Y') : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">No. Telp</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->phone_number ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Email</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->email ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->jenjang_pendidikan ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Mom->pekerjaan ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            @php
                                $penghasilan = optional($pendaftar->Child->Mom)->penghasilan;
                            @endphp
                            <td class="px-4 py-2 border border-gray-600">
                            {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                            </td>
                        </tr>
                    </table>

                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Ayah</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Ayah</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->name ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Alamat Ayah</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->alamat ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->tempat_lahir ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">
                                {{ optional($pendaftar->Child->Dad)->tanggal_lahir ? \Carbon\Carbon::parse($pendaftar->Child->Dad->tanggal_lahir)->format('d/m/Y') : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">No. Telp</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->phone_number ?? '-'  }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Email</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->email ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->jenjang_pendidikan ?? '-'   }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Dad->pekerjaan ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            @php
                                $penghasilan = optional($pendaftar->Child->Dad)->penghasilan;
                            @endphp
                            <td class="px-4 py-2 border border-gray-600">
                            {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                            </td>
                        </tr>
                    </table>

                    {{-- informasi data wali (jika ada) --}}
                    @if($pendaftar->Child->Guardian)
                    <h3 class="mt-6 mb-2 text-xl font-semibold text-purple-950">Data Wali</h3>
                    <table class="text-sm text-gray-700 border-collapse">
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Nama Wali</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->name ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Alamat Wali</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->alamat ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tempat Lahir</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->tempat_lahir ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Tanggal Lahir</td>
                            <td class="px-4 py-2 border border-gray-600">
                                {{ optional($pendaftar->Child->Guardian)->tanggal_lahir ? \Carbon\Carbon::parse($pendaftar->Child->Guardian->tanggal_lahir)->format('d/m/Y') : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">No. Telp</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->phone_number ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Email</td>
                            <td class="w-full px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->email ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Jenjang Pendidikan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->jenjang_pendidikan ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Pekerjaan</td>
                            <td class="px-4 py-2 border border-gray-600">{{ $pendaftar->Child->Guardian->pekerjaan ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold border border-gray-600">Penghasilan</td>
                            @php
                                $penghasilan = optional($pendaftar->Child->guardian)->penghasilan;
                            @endphp
                            <td class="px-4 py-2 border border-gray-600">
                            {{ $penghasilan !== null ? 'Rp' . number_format($penghasilan, 0, ',', '.') : '-' }}
                            </td>
                        </tr>
                    </table>
                    @endif
                </div>

                {{-- menampilkan foto foto bukti pembayaran --}}
                <div class="ml-0 lg:ml-8 w-full lg:w-1/2 mt-6 lg:mt-0">
                    @php
                        $kk = 'storage/' . $pendaftar->Child->kartu_keluarga;
                        $akta = 'storage/' . $pendaftar->Child->akta_kelahiran;
                    @endphp

                    <div class="mb-3">
                        <h3 class="text-lg font-semibold text-purple-950">Kartu Keluarga</h3>
                        @if(Str::endsWith(strtolower($kk), ['.pdf']))
                            <!-- PDF: hanya tombol download -->
                            <a href="{{ asset($kk) }}" download
                               class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                </svg>
                                Download Kartu Keluarga
                            </a>
                        @else
                            <!-- Gambar: preview + tombol download -->
                            <img src="{{ asset($kk) }}" alt="Kartu Keluarga" class="max-w-xs rounded shadow mb-2">
                            <a href="{{ asset($kk) }}" download
                               class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                </svg>
                                Download Kartu Keluarga
                            </a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <h3 class="text-lg font-semibold text-purple-950">Akta Kelahiran</h3>
                        @if(Str::endsWith(strtolower($akta), ['.pdf']))
                            <a href="{{ asset($akta) }}" download
                               class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                </svg>
                                Download Akta Kelahiran
                            </a>
                        @else
                            <img src="{{ asset($akta) }}" alt="Akta Kelahiran" class="max-w-xs rounded shadow mb-2">
                            <a href="{{ asset($akta) }}" download
                               class="inline-flex items-center mt-2 px-4 py-2 bg-gradient-to-l from-orange-400 to-amber-300 text-black font-semibold rounded-full shadow hover:shadow-lg transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                </svg>
                                Download Akta Kelahiran
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="buttons flex flex-row gap-3 mt-4 justify-end">
                @if(auth()->user() && auth()->user()->usertype === 'admin' && in_array($pendaftar->status, [2, 5, 8]))
                    {{-- Tombol Terima --}}
                    <form action="{{ route('pendaftar.terima', $pendaftar->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="px-4 py-2 bg-[#00BD03] text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-green-700 cursor-pointer">
                            Terima
                        </button>
                    </form>
                    {{-- Tombol Tolak --}}
                    <form action="{{ route('pendaftar.tolak', $pendaftar->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="px-4 py-2 bg-[#FF0000] text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-red-700 cursor-pointer">
                            Tolak
                        </button>
                    </form>
                @endif
                <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white border-2 border-gray-200 rounded-lg transition duration-200 hover:bg-gray-700 cursor-pointer">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection