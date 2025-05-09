@extends('layouts.pendaftaran')
{{-- judul --}}
@section('title','Input Data Orang Tua')
@section('content')
<div class="w-full flex flex-col pt-6 pb-10 gap-6">
    <!-- Form -->
    <div class="w-4/5 mx-auto">
        <form action="" class="flex flex-col gap-4">
            <!-- Nama Lengkap -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap_ibu" class="font-['Poppins'] text-right px-2">Nama Lengkap Ibu</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap">
                </div>
            </div>
            <!-- no telp -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="no_telp_ibu" class="font-['Poppins'] text-right px-2">No Telepon Ibu</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="tel" id="no_telp_ibu" name="no_telp_ibu" pattern="^\+[0-9]{1,2}-[0-9]{10,11}" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="+62xxxxxxxxxx">
                </div>
            </div>
            <!-- Pekerjaan ibu -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="pekerjaan_ibu" class="font-['Poppins'] text-right px-2">Pekerjaan Ibu</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <select type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="w-1/2 h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama panggilan anak">
                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                        <option value="PNS">PNS</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="pl-2 flex-grow flex">
                        <input type="text" id="pekerjaan_ibu_lainnya" name="pekerjaan_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
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
                    <input type="text" id="alamat_ibu" name="alamat_ibu" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat">
                </div>
            </div>
            <!-- Nama Lengkap -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="nama_lengkap_ayah" class="font-['Poppins'] text-right px-2">Nama Lengkap Ayah</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama lengkap">
                </div>
            </div>
            <!-- no telp -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="no_telp_ayah" class="font-['Poppins'] text-right px-2">No Telepon Ayah</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <input type="tel" id="no_telp_ayah" name="no_telp_ayah" pattern="^\+[0-9]{1,2}-[0-9]{10,11}" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="+62xxxxxxxxxx">
                </div>
            </div>
            <!-- Pekerjaan Ayah -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="pekerjaan_ayah" class="font-['Poppins'] text-right px-2">Pekerjaan Ayah</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <select type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="w-1/2 h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan nama panggilan anak">
                        <option value="Ayah Rumah Tangga">Ayah Rumah Tangga</option>
                        <option value="PNS">PNS</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="pl-2 flex-grow flex">
                        <input type="text" id="pekerjaan_ayah_lainnya" name="pekerjaan_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Isi kolom ini jika memilih lainnya">
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
                    <input type="text" id="alamat_ayah" name="alamat_ayah" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="mt-1 mx-auto flex justify-center items-center">
                <input type="submit" value="Selanjutnya" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
            </div>
        </form>
    </div>
</div>
@endsection