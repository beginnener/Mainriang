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
    <div class="w-fit h-auto bg-white mt-8 mx-48">
        <p class="text-slate-900 text-xl font-medium font-['Poppins']">
            Main Riang Islamic Preschool adalah Lembaga Pendidikan Islam yang berdedikasi
            pada pengembangan potensi anak usia dini secara holistik.
            Kami mengintegrasikan pendekatan Montessori dengan nilai-nilai Islam
            untuk menciptakan lingkungan belajar yang menyenangkan.
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
                        “Mengembangkan Potensi Insani Anak Dalam Harmoni Iman, Ilmu, Dan Kebaikan”
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
                            <li>Mengembangkan potensi anak secara holistik melalui pendekatan Montessori dan nilai-nilai Islam.</li>
                            <li>Menciptakan lingkungan belajar yang menyenangkan, interaktif, dan mendukung kreativitas anak.</li>
                            <li>Mengembangkan kemampuan anak untuk berpikir kritis, berani berimaginasi, dan memiliki rasa ingin tahu yang tinggi.</li>
                            <li>Membentuk karakter anak yang berakhlak mulia, peduli dan menghormati perbedaan.</li>
                            <li>Meningkatkan kesadaran dan kecintaan terhadap Islam.</li>
                        
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