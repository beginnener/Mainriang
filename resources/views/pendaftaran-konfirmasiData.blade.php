@extends('layouts.pendaftaran')
{{-- judul --}}
@section('title', $registrant->status_label)
{{-- konten --}}
@section('content')
<div class="w-full flex flex-col pt-6 pb-10 gap-6">
    <!-- Form -->
    <div class="w-4/5 mx-auto">
        <form action="{{ route('daftar') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="hidden" name="id" value="{{ $registrant->unique_id }}">
            <!-- Nama Lengkap -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap_anak" class="font-['Poppins'] text-right px-2">Nama Lengkap Anak</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap_anak" name="nama_lengkap_anak" value="{{ $registrant->child->nama }}" readonly
                    class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left">
                </div>
            </div>
            <!-- Nama Panggilan -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_panggilan_anak" class="font-['Poppins'] text-right px-2">Nama Panggilan Anak</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_panggilan_anak" name="nama_panggilan_anak" value="{{ $registrant->child->nama_panggilan }}" readonly
                    class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left">
                </div>
            </div>
            {{-- tanggal lahir --}}
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="tanggal_lahir" class="font-['Poppins'] text-right px-2">Tanggal Lahir</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $registrant->child->tanggal_lahir }}" readonly
                    class="w-1/3 h-16 px-6 font-['Poppins'] text-left text-gray-700 bg-zinc-200 border-none rounded-full">
                </div>
            </div>
            <div class="h-16 flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="jk" class="font-['Poppins'] text-right px-2">Jenis Kelamin</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-6 gap-6">
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="laki-laki" name="jk" value="L" {{ $registrant->child->jk == 'L' ? 'checked' : '' }}>
                        Laki-laki
                    </label>
                    <label class="font-['Poppins'] flex items-center gap-2">
                        <input type="radio" id="perempuan" name="jk" value="P" {{ $registrant->child->jk == 'P' ? 'checked' : '' }}>
                        Perempuan
                    </label>
                </div>
            </div>
            <!-- Nama Ibu -->
            @if ($registrant->child->mom)  <!-- cek jika ada data ibu -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap_ibu" class="font-['Poppins'] text-right px-2">Nama Lengkap Ibu</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" value="{{ $registrant->child->mom->name}}" readonly
                    class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left">
                </div>
            </div>
            @endif
            <!-- Nama ayah -->
            @if ($registrant->child->dad) <!-- cek jika ada data ayah -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap_ayah" class="font-['Poppins'] text-right px-2">Nama Lengkap Ayah</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" value="{{ $registrant->child->dad->name }}" readonly
                    class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left">
                </div>
            </div>
            @endif
            @if ($registrant->child->guardian_id) <!-- cek jika ada data wali -->
            <!-- Data Wali - Tersembunyi -->
            <div id="form_wali" class="hidden flex-col gap-4 mt-4">
                <!-- Nama Wali -->
                <div class="flex flex-row items-center">
                    <div class="w-1/6 flex justify-end items-center">
                        <label for="nama_lengkap_wali" class="font-['Poppins'] text-right px-2">Nama Lengkap Wali</label>
                    </div>
                    <span class="px-1 font-['Poppins'] flex items-center">:</span>
                    <div class="flex-grow flex items-center px-2">
                        <input type="text" id="nama_lengkap_wali" name="nama_lengkap_wali" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins']" placeholder="Masukkan nama lengkap wali">
                    </div>
                </div>
            </div>
            @endif
            <span class="text-base font-['Poppins'] text-gray-500 mt-2">Jika data sudah sesuai tekan tombol "Selesai" untuk menyelesaikan pendaftaran</span>
            <div class="mt-1 mx-auto flex justify-center items-center">
                <input type="submit" value="Selesai" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
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

@endsection