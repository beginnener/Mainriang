<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="min-h-screen flex flex-col">
    @include('components.navbar')
    @include('components.walkthrough')
    
    <!-- Judul -->
    <div class="w-full flex pt-4">
        <div class="w-1/2 h-16 rounded-tr-full rounded-br-full bg-gradient-to-l from-orange-400 to-amber-300 flex items-center">
            <span class="ml-48 font-['Fredoka'] font-semibold text-purple-950 text-3xl" style="-webkit-text-stroke: 1px #3b0764;">
                @yield('title')
            </span>
        </div>
    </div>

    <div class="content flex-grow">
        @yield('content')
    </div>
    @include('components.footer')
</body>
    @include('components.scriptnavbar')
</html>