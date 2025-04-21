@extends('layout.app')

@section('content')
<section class="w-full overflow-hidden bg-white">
    <div id="slider" class="w-full flex transition-transform duration-500">
        <img src="/images/ruang kelas 1.jpg" alt="Banner" class="w-full h-[608px] object-cover"/>
        {{-- <img src="/images/playground.jpg" alt="Banner" class="w-full h-[608px] object-cover"/> --}}
        {{-- <img src="/images/foto trialclass.jpeg.jpg" alt="Banner" class="w-full h-[608px] object-cover"/> --}}
    </div>
    <div class="max-w-screen-xl mx-auto px-4 mt-12 mb-24 flex flex-col items-center gap-8">
        <div class="w-full">
            <div class="w-full h-16 bg-gradient-to-l from-orange-400 to-amber-300 rounded-full flex justify-center items-center">
                <h2 class="font-['Fredoka'] font-bold text-purple-950 text-4xl text-center" style="-webkit-text-stroke: 1px #3b0764;">PROGRAM</h2>
            </div>
        </div>
        <div class="w-full flex flex-wrap justify-center gap-8">
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">Day Care</span>
                <img src="/icon/daycare - icon.svg" alt="Day Care" class="mt-auto" />
            </a>
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">Play Group</span>
                <img src="/icon/playgroup - icon.svg" alt="Play Group" class="mt-auto" />
            </a>
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">TK</span>
                <img src="/icon/tk - icon.svg" alt="TK" class="mt-auto" />
            </a>
        </div>
    </div>
</section>
<section class="w-full pb-6 bg-white flex justify-start">
    <div class="w-full h-auto flex flex-col gap-0">
        <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex justify-center items-center">
            <span class="font-['Fredoka'] font-semibold text-purple-950 text-3xl text-center" style="-webkit-text-stroke: 1px #3b0764;">Mengapa Main Riang?</span>
        </div>
        <div class="w-full h-auto relative bg-white flex flex-col">
            <div class="w-3/5 ml-20 rounded-3xl bg-purple-900">
                <div class="ml-28 mr-56 my-7 flex flex-col">
                    <p class="my-5 font-['Poppins'] font-normal text-white text-left">
                        Setiap anak terlahir hebat tergantung bagaimana lingkungannya membentuknya.
                        Maka dari itu, peran kami adalah mendidik dan mendampingi tumbuh kembang anak 
                        di masa golden age dan mengajarkan pembiasaan yang baik dalam kehidupan sehari-hari 
                        sesuai dengan nilai islam. Kesuksesan tumbuh kembang anak memerlukan kerjasama yang 
                        baik antara orang tua dan sekolah, bahkan orang tua adalah tulang punggung utama dalam kesuksesan ini. 
                    </p>
                    <a href="#" class="mb-5 font-['Poppins'] font-normal text-white text-left transition hover:text-blue-600 hover:underline">Selengkapnya →</a>
                </div>
            </div>
            <div class="w-[400px] h-[400px] mr-20 absolute -top-16 left-[60%] z-0 bg-slate-300 rounded-tr-full rounded-tl-full rounded-br-full shadow-[15px_4px_0px_0px_rgba(255,152,78,1.00)] overflow-hidden">
                <img src="https://placehold.co/1028x1028" alt="" class="w-full h-full object-cover" />
            </div>
        </div>    
    </div>
</section>
<section class="w-full bg-white overflow-visible flex flex-row">
    <div class="w-[610.66px]">
        <svg width="643" height="639" viewBox="0 0 643 639" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g transform="rotate(48, 321.5, 319.5) translate(-200, 180)">
                <path d="M421.747 104.196C421.747 161.741 322.761 279.183 322.761 279.183C322.761 279.183 223.776 161.741 223.776 104.196C223.776 46.65 268.093 0 322.761 0C377.43 0 421.747 46.65 421.747 104.196Z" fill="#FF984E"/>
                <path d="M154.007 168.354C209.352 183.979 295.403 311.143 295.403 311.143C295.403 311.143 155.555 374.53 100.21 358.905C44.8656 343.28 12.0429 287.957 26.8986 235.338C41.7543 182.718 98.6629 152.729 154.007 168.354Z" fill="#FF984E"/>
                <path d="M488.07 168.292C432.725 183.917 346.674 311.081 346.674 311.081C346.674 311.081 486.522 374.468 541.867 358.843C597.212 343.218 630.034 287.895 615.179 235.276C600.323 182.656 543.414 152.667 488.07 168.292Z" fill="#FF984E"/>
                <path d="M121.962 431.382C156.256 385.172 305.733 349.854 305.733 349.854C305.733 349.854 315.232 503.153 280.938 549.363C246.643 595.574 183.254 606.624 139.354 574.044C95.4544 541.464 87.6675 477.593 121.962 431.382Z" fill="#FF984E"/>
                <path d="M352.333 550.013C321.953 501.14 344.022 349.141 344.022 349.141C344.022 349.141 490.09 396.627 520.469 445.5C550.849 494.373 537.837 557.389 491.408 586.249C444.978 615.11 382.712 598.886 352.333 550.013Z" fill="#FF984E"/>
            </g>
        </svg>
    </div>
    <div class="w-full mr-28 flex flex-col justify-center">
        <div class="w-1/3 ml-auto flex justify-end">
            <h2 class="font-['Fredoka'] font-bold text-5xl text-black text-right">Trilogi <br>Main Riang</h2>
        </div>
        <div class="mt-10 flex flex-row justify-start gap-20">
            <a href="#" class="w-1/3 border border-transparent transition-all duration-500 hover:border-purple-950 hover:rounded-xl hover:bg-slate-50">
                <div class="p-4 flex flex-col" aria-label="card-1">
                    <span class="font-['Poppins'] font-bold text-2xl text-purple-950">Gembira Beraksi</span>
                    <span class="mt-4 font-['Poppins'] font-normal text-xl text-black text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</span>
                </div>
            </a>
            <a href="#" class="w-1/3 border border-transparent transition-all duration-500 hover:border-purple-950 hover:rounded-xl hover:bg-slate-50">
                <div class="p-4 flex flex-col" aria-label="card-1">
                    <span class="font-['Poppins'] font-bold text-2xl text-purple-950 text-left">Islamic Behaviour</span>
                    <span class="mt-4 font-['Poppins'] font-normal text-xl text-black text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</span>
                </div>
            </a>
            <a href="#" class="w-1/3 border border-transparent transition-all duration-500 hover:border-purple-950 hover:rounded-xl hover:bg-slate-50">
                <div class="p-4 flex flex-col" aria-label="card-1">
                    <span class="font-['Poppins'] font-bold text-2xl text-purple-950 text-left">5 Basic <br>Areas</span>
                    <span class="mt-4 font-['Poppins'] font-normal text-xl text-black text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</span>
                </div>
            </a>
        </div>
        <div class="w-1/3 ml-auto flex justify-end mt-10">
            <a href="#" class="w-60 h-14 bg-gradient-to-l from-orange-400 to-amber-300 rounded-full flex justify-center items-center transition duration-500 hover:bg-purple-900 hover:bg-none hover:outline hover:outline-orange-400 hover:outline-1 active:bg-purple-950 focus:text-yellow-400 group">
                <span class="text-purple-950 font-medium font-['Poppins'] group-hover:text-orange-400">Selengkapnya</span>
            </a>
        </div>
    </div>
</section>
<section class="w-full h-auto bg-slate-100">
    <div class="w-4/5 mx-auto flex flex-col">
        <div class="my-11 flex flex-col">
            <h2 class="font-['Poppins'] mb-1 font-extrabold text-xl text-slate-800 text-center">Lokasi Sekolah</h2>
            <span class="font-['Poppins'] font-medium text-slate-600 text-center">Terletak di lokasi strategis, sekolah kami memberikan akses mudah kepada siswa-siswa kami untuk mendapatkan pendidikan berkualitas.</span>
        </div>
        <div class="w-5/6 mb-11 mx-auto flex flex-row justify-center gap-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9946117075638!2d107.56106011059862!3d-6.891246793079091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xaa592679d7935265%3A0x2315225b5742ccc4!2sMain%20Riang%20Islamic%20Preschool%20%26%20Day%20Care!5e0!3m2!1sen!2sid!4v1745221752280!5m2!1sen!2sid" class="w-1/2 h-96 shadow-2xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.986156670651!2d107.5545703!3d-6.8910161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd4598eb56ff%3A0x292ebd885f5f9b16!2sJl.%20Cicukang%20No.37a%2C%20Cisaranten%20Bina%20Harapan%2C%20Kec.%20Arcamanik%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040294!5e0!3m2!1sen!2sid!4v1745221692969!5m2!1sen!2sid" class="w-1/2 h-96 shadow-2xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<section>
    
</section>
@endsection