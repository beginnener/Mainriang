@extends('layouts.app')
@section('content')
<div class="relative w-full overflow-clip">
    <!-- Banner Section -->
    <div class="w-full h-[300px] md:h-[350px] lg:h-[400px] relative bg-gray-700 overflow-clip">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-purple-900 via-transparent to-transparent z-10"></div>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-2xl md:text-3xl lg:text-3xl font-bold z-20 px-8 text-center">Trilogi Main Riang</h1>
    </div>

    <!-- Three Cards Section -->
    <div class="w-full bg-purple-900 py-8 md:py-10 lg:py-10">
        <div class="px-8 md:px-16 lg:px-48 flex flex-col md:flex-row justify-center items-center gap-6 md:gap-8 lg:gap-10">
            <a href="#islamic-behaviour" class="w-full max-w-[300px]">
                <div class="relative z-10 w-full h-[180px] md:h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-lg md:text-xl select-none">Islamic Behaviour</h3>
                    </div>
                    <img src="{{ asset('images/anak sholat 2.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-125">
                </div>
            </a>
            <a href="#5Area" class="w-full max-w-[300px]">
                <div class="relative z-10 w-full h-[180px] md:h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-lg md:text-xl select-none">5 Area Montessori</h3>
                    </div>
                    <img src="{{ asset('images/belajar montessori 4.jpg') }}" alt="" class="absolute z-0 -translate-y-3 translate-x-2 scale-105">
                </div>
            </a>
            <a href="#gembira-beraksi" class="w-full max-w-[300px]">
                <div class="relative z-10 w-full h-[180px] md:h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-lg md:text-xl select-none">Gembira Beraksi</h3>
                    </div>
                    <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-100">
                </div>
            </a>
        </div>
    </div>

    <!-- Islamic Behaviour Section -->
    <div id="islamic-behaviour" class="w-full bg-white">
        <div class="px-8 md:px-16 lg:px-48 py-8 md:py-12 flex flex-col justify-center items-center gap-8 md:gap-12">
            <!-- Title and Description -->
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-10 w-full">
                <div class="relative w-[250px] h-[250px] md:w-[300px] md:h-[300px] flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200 shadow-[8px_6px_0px_0px_rgba(59,7,100,1)]">
                    <div class="w-[180px] h-[180px] md:w-[200px] md:h-[200px] flex items-center">
                        <span class="font-['Poppins'] font-bold text-purple-950 text-3xl md:text-4xl text-center lg:text-right block select-none">Islamic Behaviour</span>
                    </div>
                </div>
                <div class="w-full max-w-[760px] bg-white border border-purple-900 rounded-[2rem] md:rounded-[3.5rem] p-6 md:p-8">
                    <p class="font-['Poppins'] font-medium text-center lg:text-left text-lg md:text-xl select-none">
                        Bertujuan untuk meningkatkan keimanan & ketakwaan terhadap Allah SWT,
                        Kecintaan terhadap Rasulullah SAW, dan membina sikap anak dalam rangka
                        meletakkan dasar agama agar anak menjadi muslim baik.
                    </p>
                </div>
            </div>

            <!-- Main Activities -->
            <div class="w-full max-w-[1000px] bg-purple-900 rounded-[2rem] md:rounded-[3.5rem] p-6 md:p-8 lg:px-28">
                <h3 class="mb-6 md:mb-8 font-['Poppins'] font-semibold text-center text-2xl md:text-3xl text-white pt-8 md:pt-16 select-none">
                    Aktivitas Utama
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-[800px] mx-auto">
                    <div class="space-y-4">
                        <div class="flex flex-row items-center gap-3">
                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                <span class="font-['Poppins'] font-bold text-xl">1</span>
                            </div>
                            <span class="font-['Poppins'] font-bold text-lg md:text-xl text-white select-none">
                                Akidah (Keyakinan)
                            </span>
                        </div>
                        <div class="ml-14">
                            <ul class="font-['Poppins'] text-sm md:text-base list-disc text-white select-none space-y-1">
                                <li>Mengenal Allah SWT</li>
                                <li>Mengenal Malaikat</li>
                                <li>Mengenal Kitab Suci Al-Quran</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex flex-row items-center gap-3">
                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                <span class="font-['Poppins'] font-bold text-xl select-none">2</span>
                            </div>
                            <span class="font-['Poppins'] font-bold text-lg md:text-xl text-white select-none">
                                Ibadah (Worship)
                            </span>
                        </div>
                        <div class="ml-14">
                            <ul class="font-['Poppins'] text-sm md:text-base list-disc text-white select-none space-y-1">
                                <li>Mengenal Sholat</li>
                                <li>Mengenal Puasa</li>
                                <li>Mengenal Zakat</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex flex-row items-center gap-3">
                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                <span class="font-['Poppins'] font-bold text-xl select-none">3</span>
                            </div>
                            <span class="font-['Poppins'] font-bold text-lg md:text-xl text-white select-none">
                                Akhlak (Moral)
                            </span>
                        </div>
                        <div class="ml-14">
                            <ul class="font-['Poppins'] text-sm md:text-base list-disc text-white select-none space-y-1">
                                <li>Mengenal nilai-nilai kejujuran</li>
                                <li>Mengenal nilai-nilai kesabaran</li>
                                <li>Mengenal nilai-nilai persaudaraan</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex flex-row items-center gap-3">
                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                <span class="font-['Poppins'] font-bold text-xl select-none">4</span>
                            </div>
                            <span class="font-['Poppins'] font-bold text-lg md:text-xl text-white select-none">
                                Sirah (Sejarah Islam)
                            </span>
                        </div>
                        <div class="ml-14">
                            <ul class="font-['Poppins'] text-sm md:text-base list-disc text-white select-none space-y-1">
                                <li>Mengenal Nabi Muhammad SAW</li>
                                <li>Mengenal sahabat Nabi</li>
                                <li>Mengenal peristiwa penting dalam sejarah islam</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daily Activities -->
        <div class="px-8 md:px-16 lg:px-48 my-8 md:my-10 flex flex-col gap-8 md:gap-10 justify-center items-center">
            <span class="font-['Poppins'] text-3xl md:text-4xl font-bold select-none text-center">Aktivitas Harian</span>
            <div class="w-full flex flex-wrap justify-center items-center gap-4 md:gap-6 lg:gap-8">
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Pembiasaan praktik solat dhuha
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Hafalan surat pilihan Al-Quran
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Belajar membaca IQRO
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Hafalan doa sehari-hari
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Hafalan Hadis & Mahfudzat
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Cerita Nabi dan Sahabat
                    </span>
                </span>
                <span class="h-14 md:h-16 px-6 md:px-8 lg:px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-base md:text-lg font-semibold select-none text-center">
                        Pembiasaan kalimat Thoyyibah
                    </span>
                </span>
            </div>
        </div>
    </div>

    <!-- 5 Area Montessori Section -->
    <div id="5Area" class="w-full h-fit pb-8 md:pb-12">
        <!-- Header Image and Title -->
        <div class="w-full h-[300px] md:h-[350px] lg:h-[410px] relative">
            <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.43_2451758b.jpg') }}" class="absolute w-full h-full object-cover object-center lg:object-[center_40%] lg:translate-x-20"/>
            <div class="relative z-10 w-full h-full bg-gradient-to-r from-purple-950 via-purple-950/70 to-purple-950/0 lg:to-purple-950/0 flex items-center">
                <div class="px-8 md:px-16 lg:ml-32">
                    <h1 class="relative font-bold italic text-4xl md:text-6xl lg:text-7xl text-white text-shadow-xl text-shadow-slate-900/50 select-none text-center lg:text-left">
                        5 Area
                        <br>Montessori
                    </h1>
                </div>
            </div>
        </div>

        <!-- Content Areas -->
        <div class="w-full overflow-clip flex justify-center items-center">
            <div class="px-8 md:px-16 lg:px-48 mt-8 md:mt-10">
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 md:gap-10 max-w-6xl mx-auto">
                    <div class="space-y-8 md:space-y-10">
                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-xl md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Area ini dirancang untuk membantu anak-anak mengembangkan keterampilan hidup sehari-hari,
                                    seperti memasak, membersihkan, dan merawat diri sendiri. Dengan melakukan aktivitas-aktivitas praktis,
                                    anak-anak dapat mengembangkan koordinasi motorik, kemandirian, dan rasa tanggung jawab.
                                </span>
                            </div>
                        </div>

                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-xl md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Sensorial Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Area ini dirancang untuk membantu anak-anak mengembangkan kemampuan indra mereka,
                                    seperti melihat, mendengar, menyentuh, dan merasakan. Dengan menggunakan
                                    bahan-bahan sensorial seperti pasir, air, dan tekstil, anak-anak dapat mengembangkan
                                    kemampuan diskriminasi dan pengenalan.
                                </span>
                            </div>
                        </div>

                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-xl md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Language Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Area ini dirancang untuk membantu anak-anak mengembangkan kemampuan bahasa mereka,
                                    seperti membaca, menulis, dan berbicara. Dengan menggunakan bahan-bahan seperti kartu kata,
                                    buku, dan permainan bahasa, anak-anak dapat  mengembangkan kemampuan komunikasi dan ekspresi.
                                </span>
                            </div>
                        </div>

                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-xl md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Math Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Area ini dirancang untuk membantu anak-anak mengembangkan kemampuan matematika mereka,
                                    seperti menghitung, mengukur, dan memahami konsep-konsep matematika. Dengan menggunakan
                                    bahan-bahan seperti blok, manik-manik, dan permainan matematika, anak-anak dapat mengembangkan
                                    kemampuan logika dan pemecahan masalah.
                                </span>
                            </div>
                        </div>

                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-xl md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Culture Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Area ini dirancang untuk membantu anak-anak mengembangkan kesadaran dan apresiasi
                                    terhadap budaya dan masyarakat yang berbeda-beda. Dengan menggunakan bahan-bahan
                                    seperti peta, globe, dan permainan budaya, anak-anak dapat mengembangkan kemampuan memahami
                                    dan menghargai perbedaan.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gembira Beraksi Section -->
    <div id="gembira-beraksi" class="w-full">
        <!-- Header Section -->
        <div class="relative">
            <!-- Mobile and Tablet Layout -->
            <div class="block lg:hidden">
                <div class="relative w-full h-[300px] md:h-[350px] overflow-hidden rounded-3xl mx-8 md:mx-16">
                    <img src="{{ asset('images\belajar montessori 4.jpg') }}" class="absolute w-full h-full object-cover object-center"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="inline-block bg-gradient-to-l from-orange-400 to-amber-200 rounded-full p-6 md:p-8 shadow-2xl">
                                <span class="font-['Poppins'] text-2xl md:text-3xl font-bold text-purple-900">
                                    Gembira<br>Beraksi
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout (Original) -->
            <div class="hidden lg:flex flex-row items-center">
                <div class="w-2/3 h-[310px] relative">
                    <img src="{{ asset('images\belajar montessori 4.jpg') }}" class="absolute w-full h-full object-cover object-[center_30%]"/>
                </div>
                <div class="relative w-[310px] h-[310px] z-10 -ml-36 flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-200 rounded-t-full rounded-br-full">
                    <div class="mt-3 w-[180px] h-[180px] flex flex-wrap justify-center items-center">
                        <span class="font-['Poppins'] text-4xl font-bold text-center">Gembira Beraksi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="w-full overflow-clip flex justify-center items-center">
            <div class="px-8 md:px-16 lg:px-48 py-8 md:py-12">
                <div class="max-w-6xl mx-auto">
                    <div class="space-y-8 md:space-y-10">
                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-lg md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    GEMBIRA (Gerak, Emosi Cerdas, Makan & minum sehat, beribadah, Istirahat, Rukun dan Aktif Berkarya) 
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    <ul class="list-disc list-inside space-y-4 mt-2">
                                        <li>
                                            <strong>Fisik Motorik:</strong> pengembangan ini bertujuan memperkenalkan dan melatih gerakan kasar dan halus, meningkatkan kemampuan mengelola, mengontrol gerakan tubuh dan koordinasi, serta meningkatkan keterampilan tubuh dan cara hidup sehat sehingga dapat menunjang pertumbuhan jasmani yang sehat, kuat dan terampil.
                                        </li>
                                        <li>
                                            <strong>Kognitif:</strong> pengembangan ini bertujuan agar anak mampu mengolah perolehan belajarnya, menemukan bermacam-macam alternatif pemecahan masalah, mengembangkan kemampuan logika matematika, pengetahuan ruang dan waktu, kemampuan memilah dan mengelompokkan, dan persiapan pengembangan kemampuan berpikir teliti.
                                        </li>
                                        <li>
                                            <strong>Berbahasa:</strong> bidang ini bertujuan agar anak mampu mengungkapkan pikiran melalui bahasa yang sederhana secara tepat, mampu berkomunikasi secara efektif dan membangkitkan minat anak untuk dapat berbahasa Indonesia dengan baik.
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </div>

                        <div class="w-full bg-white">
                            <div class="mb-4">
                                <span class="font-['Poppins'] font-bold text-lg md:text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    BERAKSI (Bersama Anak Berkreasi (Seni, Prakarya, Gerak dan Lagu))
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-base md:text-lg">
                                    Kami menyadari bahwa seni merupakan bagian yang krusial
                                    dari pendidikan anak. Melalui seni, kamu memberikan anak
                                    kebebasan dalam berkarya untuk mengasah rasa percaya diri
                                    untuk berinovasi dan mengekspresikan kreativitasnya.
                                    Selain itu anak-anak memiliki kebutuhan gerak yang tinggi
                                    yang dapat membantu kerja otaknya. Maka dari itu,
                                    dalam rutinitas sekolah, kami selalu menyertakan aktivitas yang melibatkan gerak,
                                    seperti menari, bermain di playground, dan kegiatan lainnya.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- elemen hiasan --}}
    {{-- 5 area --}}
    <div class="absolute z-10 top-[3300px] left-[68%] w-[220px] h-[320px] rounded-bl-[3rem] shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden scale-75">
        <img src="{{ asset('images/foto anak berdua 2.jpg') }}" alt="" class="">
    </div>
    <div class="absolute z-10 top-[2600px] left-[68%] w-[220px] h-[220px] rounded-t-full rounded-br-full shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden scale-90">
        <img src="{{ asset('images/IMG_2422.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>
    <div class="absolute top-[2900px] left-[80%] ml-auto flex justify-end">
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
    <div class="absolute top-[2980px] left-[70%]">
        <svg width="246" height="232" viewBox="0 0 246 232" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g transform="scale(0.4)">
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
    {{-- gembira beraksi --}}
    <div class="absolute z-10 top-[4090px] left-[10%] w-[220px] h-[320px] rounded-bl-[3rem] shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden scale-75">
        <img src="{{ asset('images/IMG_2407.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>
    <div class="absolute z-10 w-[220px] h-[220px] top-[4800px] left-[20%] rounded-t-full rounded-br-full shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden scale-90">
        <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_053b8ce4 - crop.jpg') }}" alt="" class="">
    </div>
    <div class="absolute ml-auto top-[4370px] -left-[13%] flex justify-end">
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
    <div class="absolute top-[5030px] left-[10%]">
        <svg width="246" height="232" viewBox="0 0 246 232" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g transform="scale(0.4)">
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
@endsection