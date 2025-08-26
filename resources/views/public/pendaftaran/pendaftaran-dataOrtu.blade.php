@extends('layouts.pendaftaran')
{{-- judul --}}
@section('content')
<x-title title="Input Data Orang Tua" />
<div class="w-full flex flex-col py-6 gap-6">
    <div class="w-full max-w-6xl mx-auto px-8">
        <form action="{{ route('daftar') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <!-- Nama Lengkap Ibu -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="nama_lengkap_ibu" class="font-['Poppins'] text-left md:text-right px-2">Nama Lengkap Ibu</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" required>
                </div>
            </div>
            <!-- No Telp Ibu -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="no_telp_ibu" class="font-['Poppins'] text-left md:text-right px-2">No Telepon Ibu</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="tel" id="no_telp_ibu" name="no_telp_ibu" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="08xxxxx" required>
                </div>
            </div>
            <!-- Pekerjaan Ibu -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="pekerjaan_ibu" class="font-['Poppins'] text-left md:text-right px-2">Pekerjaan Ibu</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2 gap-2">
                    <select id="pekerjaan_ibu" name="pekerjaan_ibu" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left transition-all duration-300 ease-in-out" required>
                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                        <option value="PNS">PNS</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_ibu">
                        <input type="text" id="pekerjaan_ibu_lainnya" name="pekerjaan_ibu_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                    </div>
                </div>
            </div>
            <!-- Alamat Ibu -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="alamat_ibu" class="font-['Poppins'] text-left md:text-right px-2">Alamat Ibu</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="alamat_ibu" name="alamat_ibu" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat" required>
                </div>
            </div>
            <!-- Nama Lengkap Ayah -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="nama_lengkap_ayah" class="font-['Poppins'] text-left md:text-right px-2">Nama Lengkap Ayah</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap" required>
                </div>
            </div>
            <!-- No Telp Ayah -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="no_telp_ayah" class="font-['Poppins'] text-left md:text-right px-2">No Telepon Ayah</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="tel" id="no_telp_ayah" name="no_telp_ayah" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="08xxxxx" required>
                </div>
            </div>
            <!-- Pekerjaan Ayah -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="pekerjaan_ayah" class="font-['Poppins'] text-left md:text-right px-2">Pekerjaan Ayah</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2 gap-2">
                    <select id="pekerjaan_ayah" name="pekerjaan_ayah" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left transition-all duration-300 ease-in-out" required>
                        <option value="Ayah Rumah Tangga">Ayah Rumah Tangga</option>
                        <option value="PNS">PNS</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_ayah">
                        <input type="text" id="pekerjaan_ayah_lainnya" name="pekerjaan_ayah_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                    </div>
                </div>
            </div>
            <!-- Alamat Ayah -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="alamat_ayah" class="font-['Poppins'] text-left md:text-right px-2">Alamat Ayah</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <input type="text" id="alamat_ayah" name="alamat_ayah" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat" required>
                </div>
            </div>
            <!-- Memiliki Wali -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label class="font-['Poppins'] text-left md:text-right px-2">Memiliki Wali</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex gap-4 items-center px-2">
                    <label class="font-['Poppins']">
                        <input type="radio" name="punya_wali" value="ya" id="wali_ya" class="mr-1"> Ya
                    </label>
                    <label class="font-['Poppins']">
                        <input type="radio" name="punya_wali" value="tidak" id="wali_tidak" class="mr-1"> Tidak
                    </label>
                </div>
            </div>
            <!-- Data Wali - Tersembunyi -->
            <div id="form_wali" class="hidden flex-col gap-4 mt-4">
                <!-- Nama Wali -->
                <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                    <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                        <label for="nama_lengkap_wali" class="font-['Poppins'] text-left md:text-right px-2">Nama Lengkap Wali</label>
                    </div>
                    <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                    <div class="w-full md:flex-1 flex items-center px-2">
                        <input type="text" id="nama_lengkap_wali" name="nama_lengkap_wali" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins']" placeholder="Masukkan nama lengkap wali">
                    </div>
                </div>
                <!-- No Telepon Wali -->
                <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                    <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                        <label for="no_telp_wali" class="font-['Poppins'] text-left md:text-right px-2">No Telepon Wali</label>
                    </div>
                    <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                    <div class="w-full md:flex-1 flex items-center px-2">
                        <input type="tel" id="no_telp_wali" name="no_telp_wali" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins']" placeholder="08xxxxx">
                    </div>
                </div>
                <!-- Pekerjaan Wali -->
                <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                    <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                        <label for="pekerjaan_wali" class="font-['Poppins'] text-left md:text-right px-2">Pekerjaan Wali</label>
                    </div>
                    <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                    <div class="w-full md:flex-1 flex items-center px-2 gap-2">
                        <select id="pekerjaan_wali" name="pekerjaan_wali" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] transition-all duration-300 ease-in-out">
                            <option value="PNS">PNS</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div class="hidden pl-2 flex-grow transition-all duration-300 ease-in-out" id="div_wali">
                            <input type="text" id="pekerjaan_wali_lainnya" name="pekerjaan_wali_lainnya" class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
                        </div>
                    </div>
                </div>
                <!-- Alamat Wali -->
                <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                    <div class="w-full md:w-1/4 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                        <label for="alamat_wali" class="font-['Poppins'] text-left md:text-right px-2">Alamat Wali</label>
                    </div>
                    <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                    <div class="w-full md:flex-1 flex items-center px-2">
                        <input type="text" id="alamat_wali" name="alamat_wali" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat Wali">
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-2 mx-auto flex justify-center items-center">
                <button type="submit" class="inline-flex items-center justify-center w-full md:w-auto px-8 py-3 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg font-bold text-center transition hover:shadow-none hover:translate-y-1">Selanjutnya</button>
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
                input.setAttribute('required', 'required');
            } else {
                select.style.width = '100%';
                div.classList.add('hidden');
                div.classList.remove('flex');
                input.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
                input.classList.remove('max-h-40', 'opacity-100');
                input.removeAttribute('required');
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

@endsection