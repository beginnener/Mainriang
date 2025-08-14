<x-guest-layout>
    <x-auth-card>
        <h2 class="text-lg font-bold">Verifikasi Email</h2>

        @if ($errors->any())
            <div class="mt-2 text-red-500">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.verify') }}">
            @csrf

            <div class="mt-4">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email', $email) }}" required>
            </div>

            <div class="mt-4">
                <label for="code">Kode Verifikasi</label>
                <input type="text" name="code" required>
            </div>

            <div class="mt-4">
                <button class="btn btn-primary">
                    Verifikasi
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
