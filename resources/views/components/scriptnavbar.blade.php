<script>
    const aboutBtn = document.getElementById('toggleAbout');
    const aboutMenu = document.getElementById('aboutMenu');
    const allBtn = document.getElementById('toggleAllMenu');
    const allMenu = document.getElementById('allMenu');

    let isAboutMenuPinned = false;
    let isAllMenuPinned = false;

    // === ABOUT MENU ===

    aboutBtn.addEventListener('mouseenter', () => {
        if (!isAboutMenuPinned) aboutMenu.classList.remove('hidden');
    });

    aboutBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!isAboutMenuPinned && !aboutMenu.matches(':hover')) {
                aboutMenu.classList.add('hidden');
            }
        }, 100);
    });

    aboutMenu.addEventListener('mouseleave', () => {
        if (!isAboutMenuPinned && !aboutBtn.matches(':hover')) {
            aboutMenu.classList.add('hidden');
        }
    });

    aboutBtn.addEventListener('click', (e) => {
        e.stopPropagation();

        // Jika about menu sedang tidak aktif, matikan all menu
        if (!isAboutMenuPinned) {
            isAllMenuPinned = false;
            allMenu.classList.add('hidden');
        }

        isAboutMenuPinned = !isAboutMenuPinned;
        aboutMenu.classList.toggle('hidden', !isAboutMenuPinned);
    });

    // === ALL MENU ===

    allBtn.addEventListener('mouseenter', () => {
        if (!isAllMenuPinned) allMenu.classList.remove('hidden');
    });

    allBtn.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!isAllMenuPinned && !allMenu.matches(':hover')) {
                allMenu.classList.add('hidden');
            }
        }, 100);
    });

    allMenu.addEventListener('mouseleave', () => {
        if (!isAllMenuPinned && !allBtn.matches(':hover')) {
            allMenu.classList.add('hidden');
        }
    });

    allBtn.addEventListener('click', (e) => {
        e.stopPropagation();

        // Jika all menu sedang tidak aktif, matikan about menu
        if (!isAllMenuPinned) {
            isAboutMenuPinned = false;
            aboutMenu.classList.add('hidden');
        }

        isAllMenuPinned = !isAllMenuPinned;
        allMenu.classList.toggle('hidden', !isAllMenuPinned);
    });

    // === KLIK DI LUAR SEMUA MENU ===
    document.addEventListener('click', (e) => {
        if (!aboutBtn.contains(e.target) && !aboutMenu.contains(e.target)) {
            isAboutMenuPinned = false;
            aboutMenu.classList.add('hidden');
        }

        if (!allBtn.contains(e.target) && !allMenu.contains(e.target)) {
            isAllMenuPinned = false;
            allMenu.classList.add('hidden');
        }
    });

    @stack('scripts')
</script>