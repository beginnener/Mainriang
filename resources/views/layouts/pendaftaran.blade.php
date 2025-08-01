<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="antialiased">
    @include('components.navbar')
    <div class="mt-[5.5rem] min-h-screen flex flex-col">
        @include('components.walkthrough')
        
        <!-- Judul -->
        <div class="w-full flex pt-4">
            <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex items-center">
                <span class="ml-48 font-['Poppins'] font-bold text-purple-950 text-3xl">
                    @yield('title')
                </span>
            </div>
        </div>
    
        <div class="content flex-grow">
            @yield('content')
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
        @include('components.footer')
    </div>
</body>
</html>