@extends('layouts.app')
@section('content')
<div class="w-full h-72 relative bg-gray-700">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold">Profil</h1>
</div>
<div class="w-full py-16">
    <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex justify-left items-center">
        <span class="ml-48 font-['Fredoka'] font-semibold text-purple-950 text-3xl text-left" style="-webkit-text-stroke: 1px #3b0764;">Tentang Main Riang</span>
    </div>
    <div class="w-4/5 h-auto bg-white mt-8 pl-48">
        <p class="text-slate-900 text-xl font-medium font-['Poppins']">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio veniam porro temporibus totam, 
            aspernatur laboriosam dignissimos nobis facere fugiat delectus qui voluptate. Soluta ex deserunt 
            accusamus suscipit dolorem qui sit, fugit doloremque harum laboriosam culpa iusto. Reprehenderit, 
            magni! Dicta porro id mollitia, possimus iusto consequatur soluta corporis accusamus, velit officiis 
            magnam laudantium similique veniam de lectus.</a>
        </p>
    </div>
    <div class="w-[960px] my-16 mb-24 p-8 mx-auto flex flex-wrap flex-row gap-6 justify-center overflow-hidden">
        <div class="w-[400px] h-[400px] rounded-full overflow-hidden bg-white">
            <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_053b8ce4.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-[400px] h-[400px] flex justify-center items-center rounded-tr-full rounded-tl-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 transition hover:shadow-xl hover:scale-105">
            <div class="mt-10 w-[250px] h-[250px]">
                <h2 class="py-2 font-['Poppins'] text-2xl font-bold text-purple-950 text-center">Visi</h2>
                <div class="flex items-center">
                    <span class="font-['Poppins'] text-lg text-purple-950 text-left">
                        Menjadi Mitra Terbaik Orang Tua Dalam Mendidik, Mengasuh, dan Membantu Tumbuh Kembang Anak Secara Utuh dan Islami
                    </span>
                </div>
            </div>
        </div>
        <div class="w-[400px] h-[400px] flex justify-center items-center rounded-tl-full rounded-bl-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300  transition hover:shadow-xl hover:scale-105">
            <div class="ml-5 -mt-14 w-[250px] h-[250px]">
                <h2 class="py-2 font-['Poppins'] text-2xl font-bold text-purple-950 text-center">Misi</h2>
                <div class="ml-6 flex items-center">
                    <span class="font-['Poppins'] text-base text-purple-950 text-left">
                        <ol class="list-decimal">
                            <li>Mengoptimalkan tumbuh kembang anak sesuai dengan usianya.</li>
                            <li>Menyiapkan pribadi anak yang sadar belajar dan berakhlak.</li>
                            <li>Menciptakan lingkungan pendidikan anak usia dini yang islami dan menyenangkan.</li>
                        </ol>
                    </span>
                </div>
            </div>
        </div>
        <div class="w-[400px] h-[400px] rounded-full overflow-hidden bg-white">
            <img src="{{ asset('images/WhatsApp Image 2025-03-11 at 09.42.05_053b8ce4.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>
    </div>
    <div class="my-8 mx-auto flex justify-center items-center">
        <a href="/mengapa" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
          Mengapa Harus Main Riang?
        </a>
    </div>
</div>

@endsection