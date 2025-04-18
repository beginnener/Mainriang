<nav class="w-full bg-purple-800 py-4 px-6 flex justify-between items-center relative">
  <div class="flex items-center gap-4">
    <img src="https://placehold.co/77x77" class="w-16 h-16" />
    <a class="text-white text-3xl font-bold font-['Fredoka']" href="/">Main Riang</a>
  </div>
  <div class="flex gap-5 items-center">
    <a href="/fasilitas">
      <span class="text-white text-base font-medium font-['Poppins']">Tentang</span>
    </a>
    <a href="/fasilitas">
      <span class="text-white text-base font-medium font-['Poppins']">Fasilitas</span>
    </a>
    <a href="/pendaftaran">
      <span class="orange-gradient rounded-full px-4 py-2 hover:bg-purple-950 text-purple-950 font-medium">Pendaftaran</span>
    </a>
    @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>
                    @endauth
                </nav>
            @endif
    <span class="text-white text-xl">=</span>
  </div>
</nav>