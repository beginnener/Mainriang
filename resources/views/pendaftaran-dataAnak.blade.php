<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body>
    @include('component.navbar')
    <div class="w-[1440px] h-[1578px] relative bg-white overflow-hidden">
        <div class="w-[1440px] h-[700px] left-0 top-[15rem] absolute overflow-hidden">
            <div class="w-[599px] h-24 left-0 top-[63px] absolute bg-gradient-to-l from-orange-400 to-amber-300 rounded-tr-[55px] rounded-br-[55px]"></div>
            <div class="w-52 left-[184px] top-[89px] absolute justify-start text-ungu-2 text-3xl font-bold font-['Poppins']">Data Anak</div>
            <form action="pendaftaran/data-ortu" method="post">
                <div class="w-[1072px] left-[184px] top-[219px] absolute inline-flex flex-col justify-start items-start gap-6">
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="nama_lengkap">Nama Lengkap</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Isi nama lengkap">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="nama_panggil">Nama Panggilan</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="text" id="nama_panggil" name="nama_panggil" placeholder="Isi nama panggilan">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <input class="w-[841px] h-16 px-12 bg-zinc-300 rounded-[55px]" type="date" id="tgl_lahir" name="tgl_lahir" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="self-stretch inline-flex justify-end items-center gap-5">
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </div>
                        <div class="text-right justify-start text-black text-xl font-medium font-['Poppins']">:</div>
                        <div class="w-[841px] h-16 px-6 py-5">
                            <span class="px-2">
                                <input type="radio" id="laki_laki" name="jenis_kelamin">
                                <label for="laki_laki">Laki-laki</label>
                            </span>
                            <span class="px-2">
                                <input type="radio" id="perempuan" name="jenis_kelamin">
                                <label for="perempuan">Perempuan</label>
                            </span>
                        </div>
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