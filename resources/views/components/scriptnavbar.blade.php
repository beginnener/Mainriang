<script>
    const aboutBtn = document.getElementById('toggleAbout');
    const aboutMenu = document.getElementById('aboutMenu');
    const allBtn = document.getElementById('toggleAllMenu');
    const allMenu = document.getElementById('allMenu');

    let isAboutMenuPinned = false;
    let isAllMenuPinned = false;

    // Hover: tampilkan menu jika tidak dalam keadaan pinned
    aboutBtn.addEventListener('mouseenter', () => {
        if (!isAboutMenuPinned) {
            aboutMenu.classList.remove('hidden');
        }
    });

    // Hover out dari tombol dan menu: sembunyikan jika tidak pinned
    aboutBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!isAboutMenuPinned && !aboutMenu.matches(':hover')) {
                aboutMenu.classList.add('hidden');
            }
        }, 100); // delay supaya sempat deteksi hover ke menu
    });

    aboutMenu.addEventListener('mouseleave', () => {
        if (!isAboutMenuPinned && !aboutBtn.matches(':hover')) {
            aboutMenu.classList.add('hidden');
        }
    });

    // Klik tombol: toggle pinned mode
    aboutBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        isAboutMenuPinned = !isAboutMenuPinned;
        aboutMenu.classList.toggle('hidden', !isAboutMenuPinned);
    });

    // Klik di luar: reset pinned & sembunyikan menu
    document.addEventListener('click', (e) => {
        if (!aboutBtn.contains(e.target) && !aboutMenu.contains(e.target)) {
            isAboutMenuPinned = false;
            aboutMenu.classList.add('hidden');
        }
    });

    // untuk tombol all menu
    // Hover: tampilkan menu jika tidak dalam keadaan pinned
    allBtn.addEventListener('mouseenter', () => {
        if (!isAllMenuPinned) {
            allMenu.classList.remove('hidden');
        }
    });

    // Hover out dari tombol dan menu: sembunyikan jika tidak pinned
    allBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!isAllMenuPinned && !allMenu.matches(':hover')) {
                allMenu.classList.add('hidden');
            }
        }, 100); // delay supaya sempat deteksi hover ke menu
    });

    allMenu.addEventListener('mouseleave', () => {
        if (!isAllMenuPinned && !allBtn.matches(':hover')) {
            allMenu.classList.add('hidden');
        }
    });

    // Klik tombol: toggle pinned mode
    allBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        isAllMenuPinned = !isAllMenuPinned;
        allMenu.classList.toggle('hidden', !isAllMenuPinned);
    });

    // Klik di luar: reset pinned & sembunyikan menu
    document.addEventListener('click', (e) => {
        if (!allBtn.contains(e.target) && !allMenu.contains(e.target)) {
            isAllMenuPinned = false;
            allMenu.classList.add('hidden');
        }
    });

    @stack('scripts')
</script>