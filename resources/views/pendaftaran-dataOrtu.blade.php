<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body>
    @include('component.navbar')
    <div class="w-[1440px] h-[1440px] relative bg-white overflow-hidden">
        <div class="w-[1440px] h-full left-0 top-[15rem] absolute overflow-hidden">
            <div class="w-[599px] h-24 left-0 top-[63px] absolute bg-gradient-to-l from-orange-400 to-amber-300 rounded-tr-[55px] rounded-br-[55px]"></div>
            <div class="w-80 left-[184px] top-[89px] absolute justify-start text-ungu-2 text-3xl font-bold font-['Poppins']">Data Orang Tua</div>
            <form action="pendaftaran/data-ortu" method="get">
                <div class="w-[1072px] left-[184px] top-[219px] absolute inline-flex flex-col justify-start items-start gap-6">
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="nama_lengkap_ibu">Nama Lengkap Ibu</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" placeholder="Isi nama lengkap ibu">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Isi pekerjaan ibu">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="no_telp_ibu">No Telepon Ibu</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="no_telepon_ibu" name="no_telepon_ibu" placeholder="+62">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="alamat_ibu">Alamat Ibu</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="alamat_ibu" name="alamat_ibu" placeholder="Jl. ">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-l font-medium font-['Poppins']">
                            <label for="nama_lengkap_ayah">Nama Lengkap Ayah</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" placeholder="Isi nama lengkap ayah">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Isi pekerjaan ayah">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="no_telp_ayah">No Telepon Ayah</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="no_telepon_ayah" name="no_telepon_ayah" placeholder="+62">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="alamat_ayah">Alamat Ayah</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="alamat_ayah" name="alamat_ayah" placeholder="Jl. ">
                    </div>
                    <div class="self-stretch inline-flex justify-center items-center gap-5">
                        <div class="w-64 h-14 bg-gradient-to-l from-orange-400 to-amber-300 rounded-[50px] shadow-[0px_7px_4px_0px_rgba(33,0,58,1.00)]">
                            <input class="px-16 py-3.5 text-center justify-center text-xl font-semibold text-white" type="submit" value="Selanjutnya">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('component.walkthrough')
    </div>
    @include('component.footer')    
</body>
</html>