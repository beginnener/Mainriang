<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body class="antialiased min-h-screen">
  @include('components.navbar')

  <div class="content min-h-screen flex pt-[80px]">
    {{-- Sidebar khusus halaman user --}}
    @include('components.user-sidenav')

    {{-- Area konten utama --}}
    <div class="w-full lg:ml-[250px] flex-grow px-4 lg:px-8 py-6">
      @yield('content')
    </div>
  </div>
</body>
</html>