<x-app-layout>
    @include('components.admin-sidenav')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.export-pendaftar') }}" target="_blank"
        class="px-6 py-2 bg-amber-400 text-white font-bold rounded-full hover:bg-amber-500 transition">
            Export Excel
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
