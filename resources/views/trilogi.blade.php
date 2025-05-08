@extends('layouts.app')
@section('content')
<div class="relative w-full overflow-clip">
    <div class="w-full h-[400px] relative bg-gray-700 overflow-clip">
        <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
        <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-purple-900 via-transparent to-transparent z-10"></div>
        <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold z-20">Trilogi Main Riang</h1>
    </div>
    <div class="w-full h-[300px] inset-0 bg-purple-900">
        <div class="py-10 flex flex-row -mt-0.5 justify-center items-center gap-10">
            <a href="#islamic-behaviour">
                <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">Islamic Behaviour</h3>
                    </div>
                    <img src="{{ asset('images/anak sholat 2.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-125">
                </div>
            </a>
            <a href="#5Area">
                <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">5 Area Montessori</h3>
                    </div>
                    <img src="{{ asset('images/belajar montessori 4.jpg') }}" alt="" class="absolute z-0 -translate-y-3 translate-x-2 scale-105">
                </div>
            </a>
            <a href="#gembira-beraksi">
                <div class="relative z-10 w-[300px] h-[200px] bg-white rounded-3xl overflow-clip shadow-lg shadow-slate-800/80 transition duration-700 hover:scale-105">
                    <div class="absolute z-10 bottom-0 w-full h-12 bg-gradient-to-l from-orange-400 to-amber-200 flex justify-start items-center">
                        <h3 class="ml-4 font-['Poppins'] font-bold text-xl select-none">Gembira Beraksi</h3>
                    </div>
                    <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.44_b88173d4.jpg') }}" alt="" class="absolute z-0 -translate-y-6 translate-x-2 scale-100">
                </div>
            </a>
        </div>
    </div>
    <div id="islamic-behaviour" class="w-full bg-white">
        <div class="px-12 py-12 flex flex-col justify-center items-center gap-12">
            <div class="flex flex-row justify-center items-center gap-10">
                <div class="relative z-10 -right-12 w-[300px] h-[300px] flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200 shadow-[8px_6px_0px_0px_rgba(59,7,100,1)]">
                    <div class="w-[200px] h-[200px] flex items-center">
                        <span class="font-['Poppins'] font-bold text-purple-950 text-4xl text-right block select-none">Islamic Behaviour</span>
                    </div>
                </div>
                <div class="relative right-12 w-[760px] h-[300px] bg-white border border-purple-900 rounded-[3.5rem]">
                    <div class="w-[600px] h-[300px] ml-20 flex items-center">
                        <p class="font-['Poppins'] font-medium text-left text-xl select-none">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui voluptatibus officia atque, 
                            inventore adipisci fuga ea, eius commodi ratione non provident id enim repudiandae nostrum saepe. Magnam 
                            fugiat hic eum, inventore similique molestiae nisi porro officiis laborum dignissimos. Et molestiae aliquid 
                            impedit labore mollitia ab quia asperiores nam optio!
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-[1000px] h-[500px] ml-4 bg-purple-900 rounded-[3.5rem]">
                <div class="px-28">
                    <h3 class="mb-8 font-['Poppins'] font-semibold text-center text-3xl text-white pt-16 select-none">
                        Aktivitas Utama
                    </h3>
                    <div class="w-[800px] h-[300px] mx-auto flex flex-col flex-wrap gap-8">
                        <div class="w-[384px] h-[134px]">
                            <div class="flex flex-row items-center gap-3">
                                <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                    <span class="font-['Poppins'] font-bold text-xl">1</span>
                                </div>
                                <span class="font-['Poppins'] font-bold text-xl text-white select-none">
                                    Akidah (Keyakinan)
                                </span>
                            </div>
                            <div class="ml-[4.5rem]">
                                <ul class="font-['Poppins'] text-base list-disc text-white select-none">
                                    <li>Mengenal Allah SWT</li>
                                    <li>Mengenal Malaikat</li>
                                    <li>Mengenal Kitab Suci Al-Quran</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-[384px] h-[134px]">
                            <div class="flex flex-row items-center gap-3">
                                <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                    <span class="font-['Poppins'] font-bold text-xl select-none">2</span>
                                </div>
                                <span class="font-['Poppins'] font-bold text-xl text-white select-none">
                                    Ibadah (Worship)
                                </span>
                            </div>
                            <div class="ml-[4.5rem]">
                                <ul class="font-['Poppins'] text-base list-disc text-white select-none">
                                    <li>Mengenal Sholat</li>
                                    <li>Mengenal Puasa</li>
                                    <li>Mengenal Zakat</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-[384px] h-[134px]">
                            <div class="flex flex-row items-center gap-3">
                                <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                    <span class="font-['Poppins'] font-bold text-xl select-none">3</span>
                                </div>
                                <span class="font-['Poppins'] font-bold text-xl text-white select-none">
                                    Akhlak (Moral)
                                </span>
                            </div>
                            <div class="ml-[4.5rem]">
                                <ul class="font-['Poppins'] text-base list-disc text-white select-none">
                                    <li>Mengenal nilai-nilai kejujuran</li>
                                    <li>Mengenal nilai-nilai kesabaran</li>
                                    <li>Mengenal nilai-nilai persaudaraan</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-[384px] h-[134px]">
                            <div class="flex flex-row items-center gap-3">
                                <div class="w-11 h-11 flex justify-center items-center rounded-full bg-gradient-to-l from-orange-400 to-amber-200">
                                    <span class="font-['Poppins'] font-bold text-xl select-none">4</span>
                                </div>
                                <span class="font-['Poppins'] font-bold text-xl text-white select-none">
                                    Sirah (Sejarah Islam)
                                </span>
                            </div>
                            <div class="ml-[4.5rem]">
                                <ul class="font-['Poppins'] text-base list-disc text-white select-none">
                                    <li>Mengenal Nabi Muhammad SAW</li>
                                    <li>Mengenal sahabat Nabi</li>
                                    <li>Mengenal peristiwa penting dalam sejarah islam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[1200px] h-[410px] mx-auto my-10 flex flex-col gap-10 flex-wrap justify-center items-center">
            <span class="font-['Poppins'] text-4xl font-bold select-none">Aktivitas Harian</span>
            <div class="w-full flex flex-row flex-wrap justify-center items-center gap-10">
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Pembiasaan praktik solat dhuha
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Hafalan surat pilihan Al-Quran
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Belajar membaca Iqro
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Hafalan doa sehari-hari
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Hafalan hadis & mahfudzat
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Cerita Nabi dan Sahabat
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Cerita Nabi dan Sahabat
                    </span>
                </span>
                <span class="h-16 px-10 bg-gradient-to-l from-orange-400 to-amber-200 flex items-center rounded-full shadow-lg transition-transform duration-700 hover:scale-110">
                    <span class="font-['Poppins'] text-lg font-semibold select-none">
                        Pembiasaan kalimat Thoyyibah
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div id="5Area" class="w-full h-fit pb-12">
        <div class="w-full h-[410px] relative">
            <img src="{{ asset('images\WhatsApp Image 2025-03-17 at 14.09.43_2451758b.jpg') }}" class="absolute w-full h-[410px] object-cover object-[center_40%] translate-x-20"/>
            <div class="relative z-10 w-[800px] h-[410px] bg-gradient-to-r from-purple-950 to-purple-950/0 flex items-center">
                <div class="ml-32">
                    <!-- Gradient text layer -->
                    <h1 class="relative font-bold italic text-7xl text-white text-shadow-xl text-shadow-slate-900/50 select-none">
                        5 Area
                        <br>Montessori
                    </h1>
                </div>
            </div>
        </div>
        <div class="w-full overflow-clip flex justify-center items-center">
            <div class="w-[1000px] flex flex-row gap-10 mx-auto mt-10 bg-blue">
                <div class="flex flex-col gap-10">
                    <div class="w-[600px] h-fit bg-white">
                        <div class="mb-2">
                            <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                Practical Life Area
                            </span>
                        </div>
                        <div>
                            <span class="font-['Poppins'] text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                Quibusdam delectus provident ad!
                            </span>
                        </div>
                    </div>
                    <div class="w-[600px] h-fit bg-white">
                        <div class="mb-2">
                            <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                Practical Life Area
                            </span>
                        </div>
                        <div>
                            <span class="font-['Poppins'] text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                Quibusdam delectus provident ad!
                            </span>
                        </div>
                    </div>
                    <div class="w-[600px] h-fit bg-white">
                        <div class="mb-2">
                            <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                Practical Life Area
                            </span>
                        </div>
                        <div>
                            <span class="font-['Poppins'] text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                Quibusdam delectus provident ad!
                            </span>
                        </div>
                    </div>
                    <div class="w-[600px] h-fit bg-white">
                        <div class="mb-2">
                            <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                Practical Life Area
                            </span>
                        </div>
                        <div>
                            <span class="font-['Poppins'] text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                Quibusdam delectus provident ad!
                            </span>
                        </div>
                    </div>
                    <div class="w-[600px] h-fit bg-white">
                        <div class="mb-2">
                            <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                Practical Life Area
                            </span>
                        </div>
                        <div>
                            <span class="font-['Poppins'] text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                Quibusdam delectus provident ad!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gembira-beraksi" class="w-full">
        <div class="relative flex flex-row items-center">
            <div class="w-2/3 h-[310px] relative">
                <img src="{{ asset('images\belajar montessori 4.jpg') }}" class="absolute w-full h-[310px] object-cover object-[center_30%]"/>
            </div>
            <div class="relative w-[310px] h-[310px] z-10 -ml-36 flex justify-center items-center bg-gradient-to-l from-orange-400 to-amber-200 rounded-t-full rounded-br-full">
                <div class="mt-3 w-[180px] h-[180px] flex flex-wrap justify-center items-center">
                    <span class="font-['Poppins'] text-4xl font-bold">Gembira Beraksi</span>
                </div>
            </div>
        </div>

        <div class="w-full overflow-clip flex justify-center items-center">
            <div class="py-12">
                <div class="w-[1000px] flex flex-row gap-10 mx-auto mt-10 bg-blue">
                    <div class="flex flex-col gap-10 ml-auto">
                        <div class="w-[600px] h-fit bg-white">
                            <div class="mb-2">
                                <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                    ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                    ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                    Quibusdam delectus provident ad!
                                </span>
                            </div>
                        </div>
                        <div class="w-[600px] h-fit bg-white">
                            <div class="mb-2">
                                <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                    ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                    ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                    Quibusdam delectus provident ad!
                                </span>
                            </div>
                        </div>
                        <div class="w-[600px] h-fit bg-white">
                            <div class="mb-2">
                                <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                    ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                    ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                    Quibusdam delectus provident ad!
                                </span>
                            </div>
                        </div>
                        <div class="w-[600px] h-fit bg-white">
                            <div class="mb-2">
                                <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                    ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                    ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                    Quibusdam delectus provident ad!
                                </span>
                            </div>
                        </div>
                        <div class="w-[600px] h-fit bg-white">
                            <div class="mb-2">
                                <span class="font-['Poppins'] font-bold text-2xl bg-gradient-to-l from-orange-400 to-amber-400 bg-clip-text text-transparent">
                                    Practical Life Area
                                </span>
                            </div>
                            <div>
                                <span class="font-['Poppins'] text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Culpa quibusdam unde hic mollitia voluptas consequatur qui 
                                    ut eum dolorem facilis itaque iure, quis blanditiis pariatur 
                                    ea esse nemo repellat dolor doloremque non ad quasi id quae. 
                                    Quibusdam delectus provident ad!
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
        <img src="{{ asset('images/foto anak berdua 2.jpg') }}" alt="" class="">
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
        <img src="{{ asset('images/foto anak berdua 2.jpg') }}" alt="" class="">
    </div>
    <div class="absolute z-10 w-[220px] h-[220px] top-[4800px] left-[20%] rounded-t-full rounded-br-full shadow-[10px_8px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden scale-90">
        <img src="{{ asset('images/foto anak berdua 2.jpg') }}" alt="" class="">
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