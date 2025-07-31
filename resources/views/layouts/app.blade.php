<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="antialiased">
    @include('components.navbar')

    <div class="content min-h-screen">
        @yield('content')
    </div>
    @include('components.footer')
</body>
</html>