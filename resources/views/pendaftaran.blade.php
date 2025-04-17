<!DOCTYPE html>
@include('component.head')
<html lang="en">
<body>
    @include('component.navbar')
    <div class="w-full h-72 relative bg-gray-700">
        <img src="images\Banner.png" class="absolute inset-0 w-full h-full opacity-80"/>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Pendaftaran</h1>
    </div>
    <div class="w-[1440px] h-[1216px] relative overflow-hidden">
        <div class="w-[1072px] left-[184px] top-[216px] absolute justify-start">
            <a class="text-ungu-2 text-2xl font-medium font-['Poppins']">
                Sebelum mendaftar, pastikan Anda telah memiliki akun Main Riang. Jika Anda belum memiliki akun, silakan daftar terlebih dahulu dengan memencet tombol login kanan atas.<br/>
                <br/>Pastikan juga Anda telah membaca dan memahami program-program yang ditawarkan oleh Main Riang yang tersedia di website atau cek di </a>
                <a class="text-2xl font-['Poppins'] underline" href="#">link ini</a>
                <a class="text-ungu-2 text-2xl font-medium font-['Poppins']">
                . Informasi mengenai program, kegiatan, serta ketentuan yang berlaku dapat membantu Anda dalam memilih 
                dan mengikuti aktivitas yang sesuai dengan minat dan kebutuhan Anda. Dengan memahami program yang tersedia, 
                Anda dapat memaksimalkan pengalaman Anda bersama Main Riang.<br/>
                <br/>Berikut adalah tahapan pendaftaran Main riang:<br/>
                <ul style="list-style-type:disc">
                    <li>Pengisian data anak.</li>
                    <li>Pengisian data orang tua.</li>
                    <li>Pembayaran pendaftaran.</li>
                    <li>Pemilihan cabang dan program.</li>
                    <li>Pengisian form lanjutan.</li>
                    <li>Asesmen dan wawancara oleh psikolog.</li>
                    <li>Konfirmasi data.</li>
                    <li>Pembayaran pendidikan.</span>
                </ul>
            </a>
            <div class="mt-6 flex justify-center items-center">
                <a href="/pendaftaran/data-anak" class="inline-flex items-center justify-center w-80 h-20 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,1.00)] text-black text-xl font-bold text-center hover:opacity-90 transition">
                  Saya Ingin Mendaftar
                </a>
              </div>
        </div>
        <div class="w-[595px] h-24 left-0 top-[63px] absolute bg-gradient-to-l from-orange-400 to-amber-300 rounded-tr-[55px] rounded-br-[55px]">
            <div class="w-96 left-[184px] top-[30px] absolute justify-start text-white text-3xl font-bold font-['Poppins']">Langkah Pendaftaran</div>
        </div>
    </div>
    @include('component.footer')
</body>
</html>