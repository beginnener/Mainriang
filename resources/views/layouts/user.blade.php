<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body class="min-h-screen flex flex-col">
  @include('components.navbar')

  <div class="flex flex-1">
    {{-- Sidebar khusus halaman user --}}
    @include('components.user-sidenav')

    {{-- Area konten utama --}}
    <div class="w-full lg:ml-[250px] content flex-grow">
      @yield('content')
    </div>
  </div>

  @include('components.footer')
  @include('components.scriptnavbar')
</body>
</html>
