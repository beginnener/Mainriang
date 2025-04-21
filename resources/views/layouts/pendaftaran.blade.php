<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="min-h-screen flex flex-col">
    @include('components.navbar')
    @include('components.walkthrough')

    <div class="content flex-grow">
        @yield('content')
    </div>
    @include('components.footer')
</body>
    @include('components.scriptnavbar')
</html>