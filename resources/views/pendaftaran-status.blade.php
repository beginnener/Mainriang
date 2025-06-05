<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="min-h-screen flex flex-col">
    @include('components.navbar')
    @include('components.walkthrough')
    
    <div id="status-diterima" class="hidden content flex-grow flex justify-center items-center">
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
    </div>
    <div id="status-dlm-konfirmasi" class="hidden w-full content flex-grow flex justify-center items-center">
        <div class="w-full my-10 flex flex-col justify-center items-center">
            <span class="font-['Poppins'] text-3xl font-bold">Pendaftaran Sedang Dikonfirmasi...</span>
            <div class="my-10">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="px-10">
            </div>
            <a href="/" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                Kembali ke Beranda
            </a>
        </div>
    </div>
    <div id="status-ditolak" class="w-full content flex-grow flex justify-center items-center">
        <div class="w-[1000px] my-10 flex flex-col justify-center items-center">
            <span class="font-['Poppins'] text-3xl font-bold text-red-600">Pendaftaran Anda Ditolak</span>
            <span class="font-['Poppins'] mt-1 text-lg text-center">
                Terima kasih atas kepercayaan Anda kepada Main Riang. 
                Mohon maaf, saat ini kami belum dapat menerima pendaftaran buah hati Anda. 
                Semoga di kesempatan berikutnya kami dapat menyambut kehadiran buah hati Anda dengan hangat.
            </span>
            <div class="my-10">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="px-10">
            </div>
            <div class="flex flex-row gap-4">
                <a href="/" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
                    Kembali ke Beranda
                </a>
                <a id="msg-admin" href="#" class="relative group inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-green-600 to-green-200 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1 hover:text-white">
                    Hubungi Admin
                    <div class="absolute bottom-full mb-2 hidden group-hover:block w-max bg-gray-800 text-white text-sm rounded px-3 py-2 z-10">
                        Jika anda merasa ini adalah kesalahan, <br>
                        klik untuk menghubungi admin via WhatsApp
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>
    @include('components.scriptnavbar')
</html>