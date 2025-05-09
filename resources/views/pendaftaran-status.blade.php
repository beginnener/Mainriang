<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="min-h-screen flex flex-col">
    @include('components.navbar')
    @include('components.walkthrough')
    
    <div id="status-diterima" class="hidden content flex-grow">
        <div class="w-full my-10 flex flex-col justify-center items-center">
            <span class="font-['Poppins'] text-2xl font-bold">Pendaftaran Telah Dikonfirmasi!</span>
            <span class="font-['Poppins'] text-lg">Selamat bergabung dengan Main Riang</span>
            <div class="my-10">
                <img src="{{ asset('icon/Group 30.svg') }}" alt="" class="px-10">
            </div>
            <a href="/" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Kembali ke Beranda
            </a>
        </div>
    </div>
    <div id="status-dlm-konfirmasi" class="content flex-grow">
        <div class="w-full my-10 flex flex-col justify-center items-center">
            <span class="font-['Poppins'] text-2xl font-bold">Pendaftaran Sedang Dikonfirmasi...</span>
            <div class="my-10">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="px-10">
            </div>
            <a href="/" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Kembali ke Beranda
            </a>
        </div>
    </div>
    @include('components.footer')
</body>
    @include('components.scriptnavbar')
</html>