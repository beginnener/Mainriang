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
    <div class="w-4/5 h-auto bg-white mt-8 pl-48">
        <p class="text-slate-900 text-xl font-medium font-['Poppins']">
            Orang tua yang menyekolahkan anaknya sejak dini adalah orangtua yang memiliki
            pola pikir bahwa kehidupan berkelompok akan membangun interaksi sosial anak 
            dengan orang lain. Peran kami adalah <strong class="text-purple-950">mendidik dan mendampingi tumbuh kembang 
            anak di masa golden age</strong> dan mengajarkan pembiasaan yang baik dalam kehidupan 
            sehari-hari sesuai dengan nilai islam.
            <br><br>
            Kesuksesan tumbuh kembang anak memerlukan kerjasama yang baik antara orang tua
            dan sekolah, bahkan orang tua adalah tulang punggung utama dalam kesuksesan ini. 
            Dalam hal ini orang tua bisa memahami ketika mendapatkan laporan anaknya yang dipukul 
            teman, atau anaknya jatuh karena berlarian, atau hal-hal lainnya yang kemungkinan akan 
            terjadi ketika anak usia dini berkumpul di satu tempat yang sama. Anak menjadi mengerti 
            bahwa selain dirinya, ada juga orang lain, yang bisa dia ajak bermain, berbicara, dan 
            lain sebagainya. Kepercayaan orangtua kepada sekolah dan keyakinan bahwa segala hal yang 
            terjadi pada anak mereka adalah proses pendidikan anak untuk menjadi anak yang tangguh 
            dan memiliki kecerdasan sosial.</a>
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
<div class="w-full my-16 flex flex-row ml-auto justify-end items-center">
    <div class="relative w-[426px] h-[426px] -mr-12 flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-t-full rounded-bl-full">
        <div class="mt-14 w-[270px] h-[270px]">
            <h2 class="py-2 font-['Poppins'] text-2xl font-bold text-purple-950 text-center">Core Value</h2>
            <div class="ml-10 flex items-center">
                <span class="font-['Poppins'] text-lg text-purple-950 text-left">
                    <ol class="list-decimal">
                        <li><strong>Imagine</strong> (Mempunyai Imajinasi).</li>
                        <li><strong>Curiosity</strong> (Rasa Ingin Tahu).</li>
                        <li><strong>Creative</strong> (Kreatif).</li>
                    </ol>
                </span>
            </div>
        </div>
    </div>
    <div class="w-[805px] h-[426px]">
        <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg') }}" alt="" class="w-full h-full object-cover rounded-tl-[3rem]">
    </div>
</div>
<div class="w-full my-24 flex flex-row ml-auto justify-start items-center">
    <div class="w-[805px] h-[426px]">
        <img src="{{ asset('images/foto wudhu.jpg') }}" alt="" class="w-full h-full object-cover rounded-tr-[3rem]">
    </div>
    <div class="relative w-[426px] h-[426px] -ml-12 flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-300 rounded-t-full rounded-br-full">
        <div class="mt-16 w-[270px] h-[270px]">
            <h2 class="py-2 px-8 font-['Poppins'] text-2xl font-bold text-purple-950 text-center">Konsep Pendidikan</h2>
            <div class="ml-10 flex items-center">
                <span class="font-['Poppins'] text-lg text-purple-950 text-left">
                    <ol class="list-decimal">
                        <li>Al-Quran dan Sunah.</li>
                        <li>Metode Montessori.</li>
                        <li>Kurikulum Khas Main Riang.</li>
                    </ol>
                </span>
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