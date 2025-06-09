<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="min-h-screen flex flex-col">
    @include('components.navbar')
    @include('components.walkthrough')
    
    <div class="content flex-grow flex justify-center items-center">
        <div class="w-full my-10 flex flex-col justify-center items-center">
            <span class="font-['Poppins'] text-3xl font-bold text-green-600">Pendaftaran Telah Dikonfirmasi!</span>
            <span class="font-['Poppins'] text-lg">Selamat bergabung dengan Main Riang</span>
            <div class="my-10">
                <img src="{{ asset('icon/Group 30.svg') }}" alt="" class="px-10">
            </div>
            <a href="/" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Kembali ke Beranda
            </a>
        </div>
        <!-- Floating Button -->
        <a href="https://wa.me" target="_blank" rel="noopener noreferrer"
            class="fixed bottom-8 right-8 z-50 flex items-center gap-2 bg-white text-purple-950 rounded-full px-5 py-3 shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300"
            title="Butuh bantuan? Hubungi Admin">
            <img src="{{ asset('icon/whatsapp.svg') }}" alt="WhatsApp" class="w-8 h-8"/>
            <span class="hidden md:inline-block w-32 text-base font-semibold">
                Butuh bantuan? Hubungi Admin
            </span>
        </a>
    </div>
    @include('components.footer')
</body>
    @include('components.scriptnavbar')
</html>