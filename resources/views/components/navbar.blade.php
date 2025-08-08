<nav class="fixed top-0 z-30 shadow-lg w-full bg-purple-900 py-5 px-6 flex justify-between items-center">
  {{-- Logo --}}
  <div class="flex items-center gap-4">
    <a href="{{ route('home') }}" class="flex items-center gap-4">
      <img src="{{ asset('icon/logo main riang.svg') }}" class="w-12 h-12" />
      <span class="hidden xl:block text-3xl font-bold font-['Fredoka'] text-white">Main Riang</span>
    </a>
  </div>

  {{-- lg breakpoint menu --}}
  <div class="hidden lg:flex gap-5 items-center">
    <div class="relative">  
      <button id="toggleAbout" class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">Tentang</button>
      <div id="aboutMenu" class="hidden absolute top-full left-0 z-10 mt-2 w-[180px] bg-white rounded-3xl shadow-xl ring-1 ring-gray-900/5">
        <div class="p-4">
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('profil-mainriang') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              Profil Main Riang
            </a>
          </div>
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('trilogi') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              Trilogi
            </a>
          </div>
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('mengapa') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              Mengapa Main Riang?
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">  
      <button id="toggleProgram" class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">Program</button>
      <div id="programMenu" class="hidden absolute top-full left-0 z-10 mt-2 w-[180px] bg-white rounded-3xl shadow-xl ring-1 ring-gray-900/5">
        <div class="p-4">
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('daycare') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              Day Care
            </a>
          </div>
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('playgroup') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              Play Group
            </a>
          </div>
          <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
            <a href="{{ route('tk') }}" class="block font-semibold text-gray-900 group-hover:text-orange-400">
              TK
            </a>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ route('fasilitas') }}">
      <span class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">
        Fasilitas
      </span>
    </a>
    <a href="{{ route('galeri-kegiatan') }}">
      <span class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">
        Galeri
      </span>
    </a>
    <a href="{{ route('kemitraan') }}">
      <span class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">
        Kemitraan
      </span>
    </a>
    <a href="{{ route('petunjuk-pendaftaran') }}">
      <div class="w-36 h-10 flex items-center justify-center rounded-full bg-gradient-to-l from-orange-400 to-amber-300 transition duration-500 hover:bg-purple-900 hover:bg-none hover:outline hover:outline-orange-400 hover:outline-1 active:bg-purple-950 focus:text-yellow-400 group ">
        <span class="text-purple-950 font-medium font-['Poppins'] group-hover:text-orange-400">Pendaftaran</span>
      </div>
    </a>
    @if (Route::has('login'))
    @auth
    <a href="{{ route('dashboard') }}">
      <span class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">
        Dashboard
      </span>
    </a>
    @else
      <a href="{{ route('login') }}">
        <div class="w-28 h-10 flex items-center justify-center rounded-full bg-purple-900 text-orange-400 font-medium font-['Poppins'] border border-orange-400 transition duration-500 hover:text-purple-900 hover:border-none hover:bg-gradient-to-l hover:from-orange-400 hover:to-amber-300 group active:bg-amber-400 active:text-white">
          Log in
        </div>
      </a>
      @endauth
    @endif
  </div>

  {{-- < lg breakpoint menu --}}
  <div class="flex lg:hidden items-center">
    <button id="hamburgerButton" class="text-white p-2 focus:outline-none">
      <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>
  {{-- lg menu overlay --}}
  <div id="lgMenu" class="hidden absolute top-full left-0 w-full bg-purple-900 shadow-lg z-20">
    <div class="px-6 py-4 space-y-4">
      <a href="{{ route('home') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Beranda</a>
      <a href="{{ route('profil-mainriang') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Tentang</a>
      <a href="{{ route('trilogi') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Trilogi</a>
      <div class="space-y-2">
        <button id="lgProgramToggle" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400 w-full text-left">Program</button>
        <div id="lgProgramMenu" class="hidden pl-4 space-y-2">
          <a href="{{ route('daycare') }}" class="block text-white text-sm font-medium font-['Poppins'] py-1 hover:text-yellow-400">Day Care</a>
          <a href="{{ route('playgroup') }}" class="block text-white text-sm font-medium font-['Poppins'] py-1 hover:text-yellow-400">Play Group</a>
          <a href="{{ route('tk') }}" class="block text-white text-sm font-medium font-['Poppins'] py-1 hover:text-yellow-400">TK</a>
        </div>
      </div>
      <a href="{{ route('fasilitas') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Fasilitas</a>
      <a href="{{ route('galeri-kegiatan') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Galeri</a>
      <a href="{{ route('kemitraan') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Kemitraan</a>
      <a href="{{ route('petunjuk-pendaftaran') }}" class="block">
        <div class="w-full h-10 flex items-center justify-center rounded-full bg-gradient-to-l from-orange-400 to-amber-300 transition duration-500">
          <span class="text-purple-950 font-medium font-['Poppins']">Pendaftaran</span>
        </div>
      </a>
      @if(Route::has('login'))
        @auth
          <div class="border-t border-purple-700 pt-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="block text-white text-base font-medium font-['Poppins'] py-2 hover:text-yellow-400 w-full text-left">
                  Logout
              </button>
            </form>
          </div>
        @else
          <a href="{{ route('login') }}" class="block">
            <div class="w-full h-10 flex items-center justify-center rounded-full bg-purple-900 text-orange-400 font-medium font-['Poppins'] border border-orange-400">
              Log in
            </div>
          </a>
        @endauth
      @endif
    </div>
  </div>
</nav>

<script>
  // Hamburger menu toggle
    const hamburgerButton = document.getElementById('hamburgerButton');
    const lgMenu = document.getElementById('lgMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    hamburgerButton.addEventListener('click', () => {
      lgMenu.classList.toggle('hidden');
      hamburgerIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });

    // lg program submenu toggle
    const lgProgramToggle = document.getElementById('lgProgramToggle');
    const lgProgramMenu = document.getElementById('lgProgramMenu');

    lgProgramToggle.addEventListener('click', () => {
      lgProgramMenu.classList.toggle('hidden');
    });

  // reusable function for handling click and hover event 
  // to toggle visibility of dropdown menus
  const dropdowns = [];

  function setupDropdown(button, menu) {
      const dropdown = {
          button,
          menu,
          isPinned: false,
      };

      dropdowns.push(dropdown);

      // Hover: tampilkan dropdown
      button.addEventListener('mouseenter', () => {
          if (!dropdown.isPinned) menu.classList.remove('hidden');
      });

      // Hover keluar dari tombol
      button.addEventListener('mouseleave', () => {
          setTimeout(() => {
              if (!dropdown.isPinned && !menu.matches(':hover')) {
                  menu.classList.add('hidden');
              }
          }, 100);
      });

      // Hover keluar dari menu
      menu.addEventListener('mouseleave', () => {
          if (!dropdown.isPinned && !button.matches(':hover')) {
              menu.classList.add('hidden');
          }
      });

      // Klik tombol dropdown
      button.addEventListener('click', (e) => {
          e.stopPropagation();

          // Tutup semua dropdown lain
          dropdowns.forEach((d) => {
              if (d !== dropdown) {
                  d.isPinned = false;
                  d.menu.classList.add('hidden');
              }
          });

          // Toggle status dropdown ini
          dropdown.isPinned = !dropdown.isPinned;
          menu.classList.toggle('hidden', !dropdown.isPinned);
      });
  }

  // Klik di luar semua dropdown
  document.addEventListener('click', (e) => {
      dropdowns.forEach((d) => {
          if (!d.button.contains(e.target) && !d.menu.contains(e.target)) {
              d.isPinned = false;
              d.menu.classList.add('hidden');
          }
      });
  });

  // Setup dropdown untuk Tentang
  const toggleAbout = document.getElementById('toggleAbout');
  const aboutMenu = document.getElementById('aboutMenu');
  setupDropdown(toggleAbout, aboutMenu);

  // Setupp Dropdown untuk Program
  const toggleProgram = document.getElementById('toggleProgram');
  const programMenu = document.getElementById('programMenu');
  setupDropdown(toggleProgram, programMenu);

  // Setup Dropdown untuk All Menu
  const toggleAllMenu = document.getElementById('toggleAllMenu');
  const allMenu = document.getElementById('allMenu');
  setupDropdown(toggleAllMenu, allMenu);

</script>