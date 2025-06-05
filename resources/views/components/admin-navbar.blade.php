<header class="sticky top-0 z-50">
    <nav class="bg-purple-900">
        <div class="py-4 px-8">
            <div class="flex flex-row gap-8 justify-center">
                <div class="flex flex-row gap-4 items-center w-48 min-w-5">
                    <img src="{{ asset('icon/logo main riang.svg') }}" alt="" class="w-12 h-12">
                    <a href="" class="text-xl font-bold font-['Fredoka'] text-white ml-2 text-wrap">Halo, admin</a>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search..." class="px-4 py-2 w-[400px] rounded-full bg-zinc-50 text-black placeholder:text-gray-600 focus:outline-none active:bg-white">
                </div>
                <div id="profileToggle" class="flex flex-row w-fit gap-4 items-center ml-auto rounded-full overflow-hidden hover:shadow-gray-950/25 hover:shadow-lg">
                    <img src="{{ asset('icon/profile.png') }}" alt="Placeholder" class="w-12 h-12">
                </div>
                <div id="profileMenu" class="hidden absolute top-full right-1 z-10 mt-2 w-[180px] bg-white rounded-3xl shadow-lg ring-1 ring-gray-900/5">
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
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block font-semibold text-gray-900 hover:text-orange-400">
                                    Logout
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>    
</header>