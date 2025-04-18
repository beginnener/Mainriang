<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body>
    @include('component.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('component.footer')
</body>
    @include('component.scriptnavbar')
</html>