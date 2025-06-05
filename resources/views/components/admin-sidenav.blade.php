<div class="flex w-[250px] min-h-screen flex-col bg-purple-900 bg-clip-border text-gray-700 shadow-xl shadow-blue-gray-900/5">
  <nav class="flex min-w-[240px] flex-col gap-1 py-4 font-sans text-base font-normal text-white">
      <a href="{{ route('dashboard') }}"
        class="sidebar-button flex items-center w-full py-3 px-8 leading-tight bg-purple-900 font-['Poppins'] text-white transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 active:bg-purple-950 active:text-amber-400 focus:bg-purple-950 focus:text-amber-400 cursor-pointer
        {{ request()->routeIs('dashboard') ? 'bg-purple-950 text-amber-400' : '' }}">
        <div class="grid mr-4 place-items-center">    
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
            class="w-5 h-5">
            <path fill-rule="evenodd"
              d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
              clip-rule="evenodd"></path>
          </svg>
        </div>
        Dashboard
      </a>
    <a href="{{ route('admin-pendaftaran') }}"
      class="sidebar-button flex items-center w-full py-3 px-8 leading-tight bg-purple-900 font-['Poppins'] text-white transition-all outline-none text-start hover:bg-purple-950 hover:text-amber-400 active:bg-purple-950 active:text-amber-400 focus:bg-purple-950 focus:text-amber-400 cursor-pointer
      {{ request()->routeIs('admin-pendaftaran') ? 'bg-purple-950 text-amber-400' : '' }}">
      <div class="grid mr-4 place-items-center">    
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
          class="w-5 h-5">
          <path fill-rule="evenodd"
            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
            clip-rule="evenodd"></path>
        </svg>
      </div>
      Pendaftaran
    </a>
  </nav>
</div>