<nav class="hidden md:flex fixed w-[250px] h-screen flex-col justify-between bg-purple-900 bg-clip-border text-white shadow-xl shadow-blue-gray-900/5 font-sans text-base font-normal py-4">
  {{-- MENU UTAMA --}}
  <div>
    <div class="flex flex-row gap-2 items-center w-full py-3 px-8 mb-4">
        <img src="{{ asset('icon/logo main riang.svg') }}" alt="" class="w-12 h-12">
        <span class="text-xl font-bold font-['Fredoka'] text-white ml-2 text-wrap">Halo, {{ Str::title(explode(' ', Auth::user()->name)[0]) }}</span>
    </div>
    <a href="{{ route('admin-dashboard') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400
      {{ request()->routeIs('admin-dashboard') ? 'bg-purple-950 text-amber-400' : '' }}">
      Dashboard
    </a>
    <a href="{{ route('admin-pendaftaran') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400
      {{ request()->routeIs('admin-pendaftaran') ? 'bg-purple-950 text-amber-400' : '' }}">
      Pendaftaran
    </a>
    <a href="{{ route('admin-program') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400
      {{ request()->routeIs('admin-program') ? 'bg-purple-950 text-amber-400' : '' }}">
      Lokasi & Program
    </a>
    <a href="{{ route('admin-testimoni') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400
      {{ request()->routeIs('admin-testimoni') ? 'bg-purple-950 text-amber-400' : '' }}">
      Testimoni
    </a>
  </div>

  {{-- LOGOUT --}}
  <div>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit"
        class="sidebar-button flex items-center w-full py-3 px-8 mb-10 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400">
        Logout
      </button>
    </form>
    <p class="text-xs text-gray-300 px-8 py-2 text-center">Admin page - © 2025 Mainriang</p>
  </div>
</nav>
