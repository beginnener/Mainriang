@extends('layouts.app')
@section('content')
<div class="w-full h-48 lg:h-72 relative bg-gray-700">
    <img src="{{ asset('images/Banner.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-80"/>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-2xl lg:text-3xl font-bold">Profil</h1>
</div>
<div class="w-full py-8 lg:py-16">
    <div class="w-fit lg:w-1/2 h-12 lg:h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex items-center">
        <span class="ml-8 mr-16 lg:ml-48 font-['Fredoka'] font-semibold text-purple-950 text-2xl lg:text-3xl text-left">Tentang Main Riang</span>
    </div>
    <div class="w-full lg:w-fit h-auto bg-white mt-6 lg:mt-8 mx-4 lg:mx-48">
        <p class="text-slate-900 text-base lg:text-xl font-medium font-['Poppins'] p-4 lg:p-0">
            Main Riang Islamic Preschool adalah Lembaga Pendidikan Islam yang berdedikasi
            pada pengembangan potensi anak usia dini secara holistik.
            Kami mengintegrasikan pendekatan Montessori dengan nilai-nilai Islam
            untuk menciptakan lingkungan belajar yang menyenangkan.
        </p>
    </div>
    <div class="w-full max-w-6xl my-8 lg:my-16 mb-12 lg:mb-24 p-4 lg:p-8 mx-auto flex flex-wrap justify-center gap-4 lg:gap-8">
        <div class="w-full sm:w-[340px] aspect-square max-w-md flex flex-col items-center justify-center p-6 lg:p-8 gap-2 lg:gap-4 border rounded-[32px] lg:rounded-[48px] text-center 
            group relative overflow-hidden transition-colors duration-300 bg-white shadow-lg">
            <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[32px] lg:rounded-[48px]"></div>
            <h2 class="text-xl lg:text-2xl font-bold text-purple-950 font-['Poppins'] relative z-10 group-hover:text-white transition-colors duration-300">
                Visi
            </h2>
            <p class="text-base lg:text-lg text-purple-950 font-['Poppins'] text-center relative z-10 group-hover:text-white transition-colors duration-300">
                "Mengembangkan Potensi Insani Anak Dalam Harmoni Iman, Ilmu, Dan Kebaikan"
            </p>
        </div>
        <div class="w-full sm:w-[340px]  max-w-md flex flex-col items-start justify-start p-6 lg:p-8 gap-2 lg:gap-4 border rounded-[32px] lg:rounded-[48px] text-left 
            group relative overflow-hidden transition-colors duration-300 bg-white shadow-lg min-h-[320px] lg:min-h-[400px]">
            <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[32px] lg:rounded-[48px]"></div>
            <h2 class="text-xl lg:text-2xl font-bold text-purple-950 font-['Poppins'] relative z-10 group-hover:text-white transition-colors duration-300 self-center mb-2">
                Misi
            </h2>
            <ol class="list-decimal pl-4 lg:pl-5 space-y-1 lg:space-y-2 text-sm lg:text-base text-purple-950 font-['Poppins'] relative z-10 group-hover:text-white transition-colors duration-300">
                <li>Mengembangkan potensi anak secara holistik melalui pendekatan Montessori dan nilai-nilai Islam.</li>
                <li>Menciptakan lingkungan belajar yang menyenangkan, interaktif, dan mendukung kreativitas anak.</li>
                <li>Mengembangkan kemampuan anak untuk berpikir kritis, berani berimaginasi, dan memiliki rasa ingin tahu yang tinggi.</li>
                <li>Membentuk karakter anak yang berakhlak mulia, peduli dan menghormati perbedaan.</li>
                <li>Meningkatkan kesadaran dan kecintaan terhadap Islam.</li>
            </ol>
        </div>
    </div>
    <div class="my-6 lg:my-8 mx-auto flex justify-center items-center">
        <a href="{{ route('mengapa') }}" class="inline-flex items-center justify-center p-4 lg:p-6 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-lg lg:text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
          Mengapa Harus Main Riang?
        </a>
    </div>
</div>
@endsection
