@extends('layouts.app')
@section('content')
<div class="w-full h-[400px] relative bg-gray-700">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Mengapa Main Riang</h1>
</div>
<div class="w-full py-16">
    <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex justify-left items-center">
        <span class="ml-48 font-['Fredoka'] font-semibold text-purple-950 text-3xl text-left" style="-webkit-text-stroke: 1px #3b0764;">Tentang Main Riang</span>
    </div>
    <div class="w-fit h-auto bg-white mt-8 mx-48">
        <p class="text-slate-900 text-xl font-medium font-['Poppins']">
            Main Riang adalah lembaga pendidikan Islam di bawah naungan Yayasan Teman Ilmu Indonesia
            berdasarkan Akta Notaris Mohamad Juania, SH., M.Kn. Nomor 19 Tanggal 18 Februari 2021
            dengan Nomor Induk Berusaha (NIB) 1215000240293 yang berfokus pada pengelolaan Day Care,
            Play Group, dan Taman Kanak-Kanak (TK) dengan No Ijin Operasional 0005/IPSPNFI/VI/2024/DPMPTSP.
            <br><br>
            Main Riang hadir di <strong class="text-purple-950">Jl. Babakan Radio No. 25 GN.Batu dan Jl. Cicukang 37A Arcamanik
            Kota Bandung</strong> pada Tahun 2023 dengan lingkungan pendidikan yang aman, nyaman, dan menyenangkan,
            dimana kami tidak hanya berkomitmen terhadap pendidikan anak, tetapi kami sangat peduli
            terhadap optimal tumbuh kembang anak serta pembentukan karakter seorang muslim sejak usia dini.
            Dengan Tagline <strong class="text-purple-950">“Bermain Penuh Makna”</strong> Kami berkomitmen menjadi mitra terpercaya bagi orang tua
            untuk mengoptimalkan masa golden age anak dengan pendekatan Islamic Montessori Khas Main Riang.
        </p>
    </div>
    {{-- <div class="my-8 mx-auto flex justify-center items-center">
        <a href="/data-anak" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
          Mengapa Harus Main Riang?
        </a>
    </div> --}}
</div>
<div class="w-full h-[500px] relative">
    <img src="{{ asset('images/literasi.jpg') }}" class="absolute inset-0 w-full h-full object-cover object-[center_20%]"/>
    <div class="relative z-10 w-[750px] h-full bg-gradient-to-r from-purple-950 to-purple-950/0 flex items-start">
        <div class="ml-24 mt-14">
            <!-- Shadow layer -->
            <h1 class="absolute ml-24 top-[60px] left-[3px] text-purple-950 font-bold italic text-8xl z-10 select-none">
                Bermain Penuh Makna
            </h1>
            <!-- Gradient text layer -->
            <h1 class="relative font-bold italic text-8xl bg-gradient-to-l from-orange-500 to-amber-200 bg-clip-text text-transparent z-20">
                Bermain Penuh Makna
            </h1>
        </div>
    </div>
</div>
<div class="w-full my-16 px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
        <div class="flex flex-col items-center justify-center p-8 gap-6 border rounded-[48px] text-center 
            group relative overflow-hidden transition-colors duration-300 bg-white shadow-lg h-[450px]">
            <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[48px]"></div>
            <div class="flex flex-col items-center justify-center w-full h-full relative z-10 gap-4">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-white">
                    <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg') }}" alt="Our Values" class="w-full h-full object-cover">
                </div>
                
                <h2 class="text-2xl font-bold text-purple-950 font-['Poppins'] group-hover:text-white transition-colors duration-300">
                    Our Value
                </h2>
                
                <div class="text-left group-hover:text-white transition-colors duration-300 px-4">
                    <ol class="list-decimal pl-5 space-y-2 text-md text-purple-950 font-['Poppins'] group-hover:text-white transition-colors duration-300">
                        <li><strong>Spiritual Awareness:</strong> Mengajarkan anak untuk taqwa kepada Allah SWT, berbuat baik, dan menjauhi prilaku buruk</li>
                        <li><strong>Intellectual Excellence:</strong> Mendorong anak untuk belajar, berpikir kritis, dan mengembangkan potensinya</li>
                        <li><strong>Moral Excellence:</strong> Mengembangkan karakter anak dengan nilai sopan santun, empati, dan kejujuran</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center p-8 gap-6 border rounded-[48px] text-center 
            group relative overflow-hidden transition-colors duration-300 bg-white shadow-lg h-[450px]">
            <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[48px]"></div>
            
            <div class="flex flex-col items-center justify-center w-full h-full relative z-10 gap-4">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-white">
                    <img src="{{ asset('images/foto wudhu.jpg') }}" alt="Konsep Pendidikan" class="w-full h-full object-cover">
                </div>
                
                <h2 class="text-2xl font-bold text-purple-950 font-['Poppins'] group-hover:text-white transition-colors duration-300">
                    Konsep Pendidikan
                </h2>
                
                <div class="text-left group-hover:text-white transition-colors duration-300 px-4">
                    <ol class="list-decimal pl-5 space-y-2 text-lg text-purple-950 font-['Poppins'] group-hover:text-white transition-colors duration-300">
                        <li>Al-Quran dan Sunah</li>
                        <li>Metode Montessori</li>
                        <li>Kurikulum Khas Main Riang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full bg-slate-100 flex flex-row">
    <div class="relative w-[1280px] ml-48 py-32 flex flex-col gap-4">
        <h2 class="relative z-0 text-7xl font-['Fredoka'] font-bold bg-gradient-to-l from-orange-500 to-amber-200 bg-clip-text text-transparent" style="text-shadow: 3px 4px 5px rgba(120, 53, 15, 0.5)">
            Quality<br>
            Assurance
        </h2>
        <h2 class="absolute h-40 z-20 text-7xl font-['Fredoka'] font-bold bg-gradient-to-l from-orange-500 to-amber-200 bg-clip-text text-transparent">
            Quality<br>
            Assurance
        </h2>
        <div class="mt-4">
            <p class="font-['Poppins'] mb-2 text-lg font-semibold">Kami mendidik anak sehari-hari agar anak menjadi:</p>
            <p class="text-slate-900 text-lg font-medium font-['Poppins']">
                <ul class="ml-5 list-disc font-['Poppins'] text-lg">
                    <li>Cinta Allah dan Rasulnya</li>
                    <li>Sopan santun (mengucapkan salam, menjaga kebersihan toilet dan ruangan, dapat mengucapkan “terima kasih”, “minta maaf”, dan “minta tolong”)</li>
                    <li>Dapat membedakan barang milik pribadi dan barang orang lain, dapat merapikan kembali setiap selesai suatu pekerjaan</li>
                    <li>Makan dengan tertib</li>
                    <li>Lentur motorik kasar (senam lantai, lompat tali, dll)</li>
                    <li>Terampil motorik halus (origami, lilin mainan, dll)</li>
                    <li>Mau mendengarkan orang lain dan dapat berbicara dengan sopan</li>
                    <li>Memiliki minat yang tinggi terhadap buku</li>
                    <li>Menyukai permainan berkelompok yang memiliki aturan main</li>
                    <li>Menyanyikan lagu-lagu anak yang menyenangkan</li>
                    <li>Taat aturan</li>
                    <li>Adversity Quotient (kecerdasan menghadapi kesulitan)</li>
                </ul>
            </p>
        </div>
        <div class="mt-5 flex justify-start items-center">
            <a href="/pendaftaran" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
              Daftar Sekarang
            </a>
        </div>
    </div>
    <div class="relative w-[1280px] pb-12 flex flex-col overflow-clip">
        <div class="absolute top-32 left-24 w-[220px] h-[320px] rounded-bl-[3rem] shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
            <img src="{{ asset('images/foto anak berdua 2.jpg') }}" alt="" class="">
        </div>
        <div class="absolute top-96 left-64 ml-auto flex justify-end">
            <svg width="513" height="1021" viewBox="0 0 513 1021" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="scale(0.5)">
                  <path d="M642.677 177.971C648.353 264.259 511.509 450.123 511.509 450.123C511.509 450.123 351.499 283.785 345.823 197.497C340.147 111.209 401.999 36.8868 483.973 31.4948C565.947 26.1027 637.001 91.6822 642.677 177.971Z" fill="#FF984E"/>
                  <path d="M247.536 300.582C332.065 318.553 473.639 500.745 473.639 500.745C473.639 500.745 270.192 609.586 185.663 591.615C101.134 573.645 46.4602 493.926 63.546 413.56C80.6318 333.193 163.007 282.611 247.536 300.582Z" fill="#FF984E"/>
                  <path d="M748.448 267.54C667.002 296.428 550.513 495.595 550.513 495.595C550.513 495.595 766.464 576.849 847.911 547.961C929.357 519.073 973.117 432.88 945.652 355.444C918.186 278.007 829.895 238.651 748.448 267.54Z" fill="#FF984E"/>
                  <path d="M225.427 698.147C272.292 625.473 492.946 557.772 492.946 557.772C492.946 557.772 522.309 786.703 475.444 859.377C428.578 932.051 334.618 954.873 265.577 910.35C196.537 865.828 178.561 770.821 225.427 698.147Z" fill="#FF984E"/>
                  <path d="M582.564 853.31C532.19 783.022 550.289 552.926 550.289 552.926C550.289 552.926 773.998 609.723 824.372 680.011C874.746 750.299 861.451 846.073 794.678 893.928C727.904 941.783 632.938 923.598 582.564 853.31Z" fill="#FF984E"/>
                </g>
            </svg>
        </div>
        <div class="absolute top-[50rem] left-32">
            <svg width="246" height="232" viewBox="0 0 246 232" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="scale(0.6)">
                    <ellipse cx="123" cy="116" rx="123" ry="116" fill="url(#paint0_linear_366_169)"/>
                    <defs>
                    <linearGradient id="paint0_linear_366_169" x1="246" y1="116" x2="0" y2="116" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#73329C"/>
                    <stop offset="1" stop-color="#9A6088"/>
                    </linearGradient>
                    </defs>
                </g>
            </svg>                          
        </div>
    </div>
</div>

@endsection