<script>
    const aboutBtn = document.getElementById('toggleAbout');
    const aboutMenu = document.getElementById('aboutMenu');

    let isMenuPinned = false;

    // Hover: tampilkan menu jika tidak dalam keadaan pinned
    aboutBtn.addEventListener('mouseenter', () => {
        if (!isMenuPinned) {
            aboutMenu.classList.remove('hidden');
        }
    });

    // Hover out dari tombol dan menu: sembunyikan jika tidak pinned
    aboutBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!isMenuPinned && !aboutMenu.matches(':hover')) {
                aboutMenu.classList.add('hidden');
            }
        }, 100); // delay supaya sempat deteksi hover ke menu
    });

    aboutMenu.addEventListener('mouseleave', () => {
        if (!isMenuPinned && !aboutBtn.matches(':hover')) {
            aboutMenu.classList.add('hidden');
        }
    });

    // Klik tombol: toggle pinned mode
    aboutBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        isMenuPinned = !isMenuPinned;
        aboutMenu.classList.toggle('hidden', !isMenuPinned);
    });

    // Klik di luar: reset pinned & sembunyikan menu
    document.addEventListener('click', (e) => {
        if (!aboutBtn.contains(e.target) && !aboutMenu.contains(e.target)) {
            isMenuPinned = false;
            aboutMenu.classList.add('hidden');
        }
    });

    @stack('scripts')
</script>