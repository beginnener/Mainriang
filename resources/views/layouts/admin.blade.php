<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="h-full flex flex-col">
    @include('components.admin-navbar')

    <div class="content flex-grow">
        @yield('content')
    </div>
</body>
</html>