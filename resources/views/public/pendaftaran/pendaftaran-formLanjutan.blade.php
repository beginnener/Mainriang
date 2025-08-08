@extends('layouts.pendaftaran')
{{-- judul --}}
@section('content')
<x-title title="Data Anak" />
<div class="w-full flex flex-col py-6 gap-6">
    <div class="w-full max-w-6xl mx-auto px-8">
        <form action="{{ route('daftar') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            <input type="hidden" name="id" value="{{ $registrant->unique_id }}">
            <!-- Nama Lengkap Anak -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="nama_lengkap" class="font-['Poppins'] text-left md:text-right px-2">Nama Lengkap</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value="{{ $registrant->child->nama }}" readonly required>
                </div>
            </div>
            <!-- Jenis Kelamin -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label class="font-['Poppins'] text-left md:text-right px-2">Jenis Kelamin</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2 gap-4">
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
                    </label>
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" name="jenis_kelamin" value="P" required> Perempuan
                    </label>
                </div>
            </div>
            <!-- Tempat Lahir -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="tempat_lahir" class="font-['Poppins'] text-left md:text-right px-2">Tempat Lahir</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan tempat lahir" required>
                </div>
            </div>
            <!-- Tanggal Lahir -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="tanggal_lahir" class="font-['Poppins'] text-left md:text-right px-2">Tanggal Lahir</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" required>
                </div>
            </div>
            <!-- FORM LAINNYA -->
            @php
            $fields = [
                'nik' => 'NIK',
                'agama' => 'Agama',
                'alamat' => 'Alamat',
                'rt' => 'RT',
                'rw' => 'RW',
                'dusun' => 'Dusun',
                'kelurahan' => 'Kelurahan',
                'kecamatan' => 'Kecamatan',
                'kode_pos' => 'Kode Pos',
                'alat_transportasi' => 'Alat Transportasi'
            ];
            @endphp
            @foreach ($fields as $name => $label)
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="{{ $name }}" class="font-['Poppins'] text-left md:text-right px-2">{{ $label }}</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="{{ $name }}" name="{{ $name }}" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan {{ strtolower($label) }}" required>
                </div>
            </div>
            @endforeach
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="jenis_tinggal_anak" class="font-['Poppins'] text-left md:text-right px-2">Jenis Tinggal</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <select id="jenis_tinggal_anak" name="jenis_tinggal_anak" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" required>
                        <option value="">Pilih jenis tinggal</option>
                        <option value="dengan_ibu_dan_ayah">Dengan ibu dan ayah</option>
                        <option value="dengan_ibu">Dengan ibu</option>
                        <option value="dengan_ayah">Dengan ayah</option>
                        <option value="dengan_wali">Dengan wali</option>
                    </select>
                </div>
            </div>
            <!-- Upload Foto Kartu Keluarga -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="kartu_keluarga" class="font-['Poppins'] text-left md:text-right px-2">Foto Kartu Keluarga</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="file" id="kartu_keluarga" name="kartu_keluarga" class="hidden" accept="image/*,application/pdf" required>
                    <label id="label-foto-kk-btn" for="kartu_keluarga" class="cursor-pointer w-full py-3 px-4 bg-zinc-300 text-black font-bold rounded-full flex items-center justify-between shadow-[0px_2px_4px_0px_rgba(33,0,58,0.2)] transition">
                        <span id="label-foto-kk">Pilih file...</span>
                        <svg class="w-6 h-6 text-purple-950" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"></path></svg>
                    </label>
                </div>
            </div>
            <!-- Upload Foto Akta Kelahiran -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="akta_kelahiran" class="font-['Poppins'] text-left md:text-right px-2">Foto Akta Kelahiran</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="file" id="akta_kelahiran" name="akta_kelahiran" class="hidden" accept="image/*,application/pdf" required>
                    <label id="label-foto-akta-btn" for="akta_kelahiran" class="cursor-pointer w-full py-3 px-4 bg-zinc-300 text-black font-bold rounded-full flex items-center justify-between shadow-[0px_2px_4px_0px_rgba(33,0,58,0.2)] transition">
                        <span id="label-foto-akta">Pilih file...</span>
                        <svg class="w-6 h-6 text-purple-950" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"></path></svg>
                    </label>
                </div>
            </div>
            <!-- ...existing code for parent, guardian, and additional data sections... -->
            {{-- FORM ORTU --}}
            <x-title title="Data Ibu"></x-title>
            <div class="w-4/5 mx-auto flex flex-col gap-4">
                <!-- Nama Lengkap -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="nama_lengkap_ibu" class="font-['Poppins'] text-right px-2">Nama Lengkap Ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value = "{{ $registrant->Child->mom->name }}" readonly required>
                    </div>
                </div>
                {{-- NIK --}}
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="NIK_ibu" class="font-['Poppins'] text-right px-2">NIK ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="NIK_ibu" name="NIK_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value = "{{ $registrant->Child->mom->NIK }}" readonly required>
                    </div>
                </div>
                {{-- tahun lahir --}}
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="tanggal_lahir_ibu" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="date" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>
                <!-- no telp -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="no_telp_ibu" class="font-['Poppins'] text-right px-2">No Telepon Ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="tel" id="no_telp_ibu" name="no_telp_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="08xxxxx" value = "{{ $registrant->Child->mom->phone_number }}" required>
                    </div>
                </div>
                <!-- Pekerjaan ibu -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="pekerjaan_ibu" class="font-['Poppins'] text-right px-2">Pekerjaan Ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <select type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left transition-all duration-300 ease-in-out" value = "{{ $registrant->Child->mom->pekerjaan }}" required>
                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                            <option value="PNS">PNS</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_ibu">
                            <input type="text" id="pekerjaan_ibu_lainnya" name="pekerjaan_ibu_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                        </div>
                    </div>
                </div>
                <!-- Alamat -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="alamat_ibu" class="font-['Poppins'] text-right px-2">Alamat Ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="alamat_ibu" name="alamat_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat" value = "{{ $registrant->Child->mom->alamat }}" required>
                    </div>
                </div>
                <!-- penghasilan -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="penghasilan_ibu" class="font-['Poppins'] text-right px-2">Penghasilan</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="num" id="penghasilan_ibu" name="penghasilan_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Rp" required>
                    </div>
                </div>
                <!-- jejang Pendidikan -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="jenjang_pendidikan_ibu" class="font-['Poppins'] text-right px-2">Jenjang pendidikan ibu</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="jenjang_pendidikan_ibu" name="jenjang_pendidikan_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="sarjana" required>
                    </div>
                </div>
            </div>
            <x-title title="Data Ayah"></x-title>
            <div class="w-4/5 mx-auto flex flex-col gap-4">
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="nama_lengkap_ayah" class="font-['Poppins'] text-right px-2">Nama Lengkap Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value="{{ $registrant->Child->dad->name }}" readonly required>
                    </div>
                </div>
                {{-- NIK --}}
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="NIK_ayah" class="font-['Poppins'] text-right px-2">NIK Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="NIK_ayah" name="NIK_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan NIK" value="{{ $registrant->Child->dad->NIK }}" readonly required>
                    </div>
                </div>
                {{-- tanggal lahir --}}
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="tanggal_lahir_ayah" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="date" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan tanggal lahir" required>
                    </div>
                </div>
                <!-- no telp -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="no_telp_ayah" class="font-['Poppins'] text-right px-2">No Telepon Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="tel" id="no_telp_ayah" name="no_telp_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="08xxxxx" value="{{ $registrant->Child->dad->phone_number }}" required>
                    </div>
                </div>
                <!-- Pekerjaan Ayah -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="pekerjaan_ayah" class="font-['Poppins'] text-right px-2">Pekerjaan Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <select id="pekerjaan_ayah" name="pekerjaan_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left transition-all duration-300 ease-in-out" value="{{ $registrant->Child->dad->pekerjaan }}" required>
                            <option value="PNS">PNS</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Petani">Petani</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_ayah">
                            <input type="text" id="pekerjaan_ayah_lainnya" name="pekerjaan_ayah_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                        </div>
                    </div>
                </div>
                <!-- Alamat -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="alamat_ayah" class="font-['Poppins'] text-right px-2">Alamat Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="alamat_ayah" name="alamat_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat" value="{{ $registrant->Child->dad->alamat }}" required>
                    </div>
                </div>
                <!-- penghasilan -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="penghasilan_ayah" class="font-['Poppins'] text-right px-2">Penghasilan</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="num" id="penghasilan_ayah" name="penghasilan_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Rp" required>
                    </div>
                </div>
                <!-- jenjang Pendidikan -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="jenjang_pendidikan_ayah" class="font-['Poppins'] text-right px-2">Jenjang Pendidikan Ayah</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="jenjang_pendidikan_ayah" name="jenjang_pendidikan_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Sarjana" required>
                    </div>
                </div>
            </div>
            {{-- FORM WALI --}}
            @if ($registrant->child->guardian)
                <div id="form_wali" class="flex-col gap-4 mt-4">
                <x-title title="Data Wali"/>
                    <div class="w-4/5 mx-auto flex flex-col gap-4">
                        <!-- Nama Wali -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="nama_lengkap_wali" class="font-['Poppins'] text-right px-2">Nama Lengkap Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="text" id="nama_lengkap_wali" name="nama_lengkap_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value="{{ $registrant->Child->guardian?->name }}" readonly required>
                            </div>
                        </div>
                        {{-- NIK --}}
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="NIK_wali" class="font-['Poppins'] text-right px-2">NIK Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="text" id="NIK_wali" name="NIK_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" value="{{ $registrant->Child->guardian?->NIK }}" readonly required>
                            </div>
                        </div>
                        {{-- tanggal lahir --}}
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="tanggal_lahir_wali" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="date" id="tanggal_lahir_wali" name="tanggal_lahir_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan tanggal lahir" required>
                            </div>
                        </div>
                        <!-- no telp -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="no_telp_wali" class="font-['Poppins'] text-right px-2">No Telepon Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="tel" id="no_telp_wali" name="no_telp_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="08xxxxx" value="{{ $registrant->Child->guardian?->phone_number }}" required>
                            </div>
                        </div>
                        <!-- Pekerjaan wali -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="pekerjaan_wali" class="font-['Poppins'] text-right px-2">Pekerjaan Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <select id="pekerjaan_wali" name="pekerjaan_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left transition-all duration-300 ease-in-out" required>
                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_wali">
                                    <input type="text" id="pekerjaan_wali_lainnya" name="pekerjaan_wali_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                                </div>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="alamat_wali" class="font-['Poppins'] text-right px-2">Alamat Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="text" id="alamat_wali" name="alamat_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat" value="{{ $registrant->Child->guardian?->alamat }}" required>
                            </div>
                        </div>
                        <!-- penghasilan -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="penghasilan_wali" class="font-['Poppins'] text-right px-2">Penghasilan</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="num" id="penghasilan_wali" name="penghasilan_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Rp" required>
                            </div>
                        </div>
                        <!-- jenjang pendidikan -->
                        <div class="flex flex-row items-center">
                            <div class="w-1/6 flex justify-end items-center">
                                <label for="Jenjang_pendidikan_wali" class="font-['Poppins'] text-right px-2">Jenjang Pendidikan Wali</label>
                            </div>
                            <span class="px-1 font-['Poppins'] flex items-center">:</span>
                            <div class="flex-grow flex items-center px-2">
                                <input type="text" id="Jenjang_pendidikan_wali" name="Jenjang_pendidikan_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="sarjana" required>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- FORM DATA TAMBAHAN --}}
            <x-title title="Data Tambahan" />
            <div class="w-4/5 mx-auto flex flex-col gap-4">
                <!-- Lintang -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="lintang_anak" class="font-['Poppins'] text-right px-2">Lintang</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="text" id="lintang_anak" name="lintang_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Masukkan lintang" required>
                    </div>
                </div>

                <!-- Bujur -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="bujur_anak" class="font-['Poppins'] text-right px-2">Bujur</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="text" id="bujur_anak" name="bujur_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Masukkan bujur" required>
                    </div>
                </div>

                <!-- Jarak Rumah ke Sekolah -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="jarak_rumah_anak" class="font-['Poppins'] text-right px-2">Jarak Rumah ke Sekolah (KM)</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" step="0.01" id="jarak_rumah_anak" name="jarak_rumah_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Contoh: 1.5" required>
                    </div>
                </div>

                <!-- Berat Badan -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="berat_badan_anak" class="font-['Poppins'] text-right px-2">Berat Badan</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" id="berat_badan_anak" name="berat_badan_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Dalam KG" required>
                    </div>
                </div>

                <!-- Tinggi Badan -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="tinggi_badan_anak" class="font-['Poppins'] text-right px-2">Tinggi Badan</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" id="tinggi_badan_anak" name="tinggi_badan_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Dalam CM" required>
                    </div>
                </div>

                <!-- Lingkar Kepala -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="lingkar_kepala_anak" class="font-['Poppins'] text-right px-2">Lingkar Kepala</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" id="lingkar_kepala_anak" name="lingkar_kepala_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Dalam CM" required>
                    </div>
                </div>

                <!-- Jumlah Saudara Kandung -->
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="anak_keberapa" class="font-['Poppins'] text-right px-2">Jml. Saudara Kandung</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" id="anak_keberapa" name="anak_keberapa"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Masukkan jumlah" required>
                    </div>
                </div>
                
                <div class="flex flex-row items-center mt-4">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="jumlah_saudara_kandung_anak" class="font-['Poppins'] text-right px-2">Anak Keberapa</label>
                    </div>
                    <span class="px-1 font-['Poppins']">:</span>
                    <div class="flex-grow px-2">
                        <input type="number" id="jumlah_saudara_kandung_anak" name="jumlah_saudara_kandung_anak"
                        class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left"
                        placeholder="Masukkan jumlah" required>
                    </div>
                </div>

                <div class="mt-1 mx-auto flex justify-center items-center">
                    <input type="submit" value="Selanjutnya" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    function handleSelectChange(selectId, inputId, divId) {
        const select = document.getElementById(selectId);
        const input = document.getElementById(inputId);
        const div = document.getElementById(divId);

        // Inisialisasi agar transisi width bisa berjalan
        select.style.transition = 'width 0.3s ease';

        select.addEventListener('change', function () {
            const isLainnya = this.value === 'Lainnya';
            if (isLainnya) {
                select.style.width = '50%';
                div.classList.remove('hidden');
                div.classList.add('flex');
                input.classList.remove('max-h-0', 'opacity-0', 'overflow-hidden');
                input.classList.add('max-h-40', 'opacity-100');
            } else {
                select.style.width = '100%';
                div.classList.add('hidden');
                div.classList.remove('flex');
                input.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
                input.classList.remove('max-h-40', 'opacity-100');
                input.value = '';
            }
        });
    }

    const waliYa = document.getElementById('wali_ya');
    const waliTidak = document.getElementById('wali_tidak');
    const formWali = document.getElementById('form_wali');

    waliYa.addEventListener('change', function () {
        if (this.checked) {
            formWali.classList.remove('hidden');
            formWali.classList.add('flex');
        }
    });

    waliTidak.addEventListener('change', function () {
        if (this.checked) {
            formWali.classList.add('hidden');
            formWali.classList.remove('flex');
        }
    });
    handleSelectChange('pekerjaan_wali', 'pekerjaan_wali_lainnya', 'div_wali');
    handleSelectChange('pekerjaan_ayah', 'pekerjaan_ayah_lainnya', 'div_ayah');
    handleSelectChange('pekerjaan_ibu', 'pekerjaan_ibu_lainnya', 'div_ibu');
});
</script>
<script>
document.getElementById('kartu_keluarga').addEventListener('change', function(e) {
    const label = document.getElementById('label-foto-kk');
    const btn = document.getElementById('label-foto-kk-btn');
    if (e.target.files.length) {
        label.textContent = e.target.files[0].name;
        btn.classList.remove('bg-zinc-300');
        btn.classList.add('bg-gradient-to-l', 'from-orange-400', 'to-amber-300');
    } else {
        label.textContent = 'Pilih file...';
        btn.classList.add('bg-zinc-300');
        btn.classList.remove('bg-gradient-to-l', 'from-orange-400', 'to-amber-300');
    }
});
document.getElementById('akta_kelahiran').addEventListener('change', function(e) {
    const label = document.getElementById('label-foto-akta');
    const btn = document.getElementById('label-foto-akta-btn');
    if (e.target.files.length) {
        label.textContent = e.target.files[0].name;
        btn.classList.remove('bg-zinc-300');
        btn.classList.add('bg-gradient-to-l', 'from-orange-400', 'to-amber-300');
    } else {
        label.textContent = 'Pilih file...';
        btn.classList.add('bg-zinc-300');
        btn.classList.remove('bg-gradient-to-l', 'from-orange-400', 'to-amber-300');
    }
});
</script>

@endsection