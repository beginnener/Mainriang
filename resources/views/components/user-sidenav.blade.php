<nav class="hidden lg:flex fixed w-[250px] h-[calc(100vh-80px)] flex-col justify-between bg-purple-900 bg-clip-border text-white shadow-xl shadow-blue-gray-900/5 font-sans text-base font-normal py-4">
  {{-- MENU UTAMA --}}
  <div>
    <a href="{{ route('dashboard') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400
      {{ request()->routeIs('dashboard') ? 'bg-purple-950 text-amber-400' : '' }}">
      Dashboard
    </a>
  </div>

  {{-- LOGOUT --}}
  <div class="">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit"
        class="sidebar-button flex items-center w-full py-3 px-8 mb-10 leading-tight font-['Poppins'] transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 focus:bg-purple-950 focus:text-amber-400 active:bg-purple-950 active:text-amber-400">
        Logout
      </button>
    </form>
    <p class="text-xs text-gray-300 px-8 py-2 text-center">User page - © 2025 Mainriang</p>
  </div>
</nav>