<div class="hidden lg:flex fixed w-[250px] min-h-screen flex-col bg-purple-900 bg-clip-border text-white shadow-xl shadow-blue-gray-900/5">
  <nav class="flex min-w-[240px] flex-col gap-1 py-4 font-sans text-base font-normal">

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}"
        class="py-3 px-8 hover:bg-purple-950 hover:text-amber-400 transition
        {{ request()->routeIs('dashboard') ? 'bg-white text-orange-500 font-semibold' : '' }}">
        <div class="flex items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v6m4-6h6m-6 0v6m0-6L5 12m0 0v6" />
            </svg>
            <span>Dashboard</span>
        </div>
        </a>

  </nav>
</div>
