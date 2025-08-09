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
</div>
@endsection