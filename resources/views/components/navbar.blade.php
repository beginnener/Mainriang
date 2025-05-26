<header class="sticky top-0 z-30 shadow-lg">
  <nav class="w-full h-16 bg-purple-900 py-4 px-6 flex justify-between items-center relative">
    <div class="flex items-center gap-4">
      <img src="{{ asset('icon/logo main riang.svg') }}" class="w-12 h-12" />
      <a class="text-3xl font-bold font-['Fredoka'] text-white " href="/">Main Riang</a>
    </div>
    <div class="flex gap-5 items-center">
      <div class="relative">
        <button id="toggleAbout" class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400">Tentang</button>
        {{-- dropdown menu untuk tentang --}}
        <div id= "aboutMenu" class="hidden absolute top-full left-0 z-10 mt-2 w-[180px] bg-white rounded-3xl shadow-lg ring-1 ring-gray-900/5">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
              <div class="flex-auto">
                <a href="/profil" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                  Profil Main Riang
                  <span class="absolute inset-0"></span>
                </a>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
              <div class="flex-auto">
                <a href="program" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                  Day Care
                  <span class="absolute inset-0"></span>
                </a>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
              <div class="flex-auto">
                <a href="program" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                  Play Group
                  <span class="absolute inset-0"></span>
                </a>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
              <div class="flex-auto">
                <a href="program" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                  TK
                  <span class="absolute inset-0"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="/fasilitas">
        <span id="toggleFasilitas" class="px-2 text-white text-base font-medium font-['Poppins'] transition hover:text-yellow-400 active:text-orange-500 focus:text-yellow-400"">Fasilitas</span>
      </a>
      <a href="{{ route('petunjuk-pendaftaran') }}">
        <div class="w-36 h-10 flex items-center justify-center rounded-full bg-gradient-to-l from-orange-400 to-amber-300 transition duration-500 hover:bg-purple-900 hover:bg-none hover:outline hover:outline-orange-400 hover:outline-1 active:bg-purple-950 focus:text-yellow-400 group ">
          <span class="text-purple-950 font-medium font-['Poppins'] group-hover:text-orange-400">Pendaftaran</span>
        </div>
      </a>
      @if (Route::has('login'))
        @auth
        <div class="relative">
          <div id="toggleAllMenu" class="flex p-4 rounded-lg items-center border-transparent hover:border-2 hover:border-purple-800 hover:bg-purple-950 active:border-2 active:border-purple-800 active:bg-purple-950 focus:border-2 focus:border-purple-800 focus:bg-purple-950">
            <img src="{{ asset('icon/All.svg') }}">
          </div>
          {{-- dropdown menu untuk profil --}}
          <div id= "allMenu" class="hidden absolute top-full right-1 z-10 mt-2 w-[180px] bg-white rounded-3xl shadow-lg ring-1 ring-gray-900/5">
            <div class="p-4">
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
                <div class="flex-auto">
                  <a href="/profil" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                    Kelola Profil
                    <span class="absolute inset-0"></span>
                  </a>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-slate-100">
                <div class="flex-auto">
                  <a href="program" class="block font-semibold text-gray-900 group-hover:text-orange-400">
                    Logout
                    <span class="absolute inset-0"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @else
        <a href="{{ route('login') }}">
          <div class="w-28 h-10 flex items-center justify-center rounded-full bg-purple-900 text-orange-400 font-medium font-['Poppins'] border border-orange-400 transition duration-500 hover:text-purple-900 hover:border-none hover:bg-gradient-to-l hover:from-orange-400 hover:to-amber-300 group active:bg-amber-400 active:text-white">
            Log in
          </div>
        </a>
        @endauth
      @endif
    </div>
  </nav>
</header>