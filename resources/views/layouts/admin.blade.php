<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="antialiased">
    @include('components.admin-navbar')

    <div class="content min-h-screen">
        @yield('content')
    </div>
    @push('scripts')
    @stack('scripts')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileToggle = document.getElementById('profileToggle');
        const profileMenu = document.getElementById('profileMenu');

        profileToggle.addEventListener('click', function () {
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!profileToggle.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    });
</script>
</html>