<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="antialiased">
    @include('components.admin-navbar')

    <div class="content min-h-screen">
        @yield('content')
    </div>
    @push('scripts')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.dropdown-toggle').forEach(button => {
            button.addEventListener('click', function (e) {
                e.stopPropagation();
                const dropdown = this.nextElementSibling;
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdown) menu.classList.add('hidden');
                });
                dropdown.classList.toggle('hidden');
            });
        });

        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
        });
    });
        function openModal(id) {
        document.getElementById(`modal-${id}`).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(`modal-${id}`).classList.add('hidden');
    }
</script>
</html>