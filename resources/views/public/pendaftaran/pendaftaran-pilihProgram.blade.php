@extends('layouts.pendaftaran')

@section('title','Pilih Program')

@section('content')
<div class="w-full flex flex-col pt-6 pb-10 gap-6">
    <!-- Form -->
    <div class="w-4/5 mx-auto">
        <form action="{{ route('daftar') }}" class="flex flex-col gap-4" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <!-- Lokasi -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="lokasi" class="font-['Poppins'] text-right px-2">Lokasi</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <select id="lokasi" name="lokasi" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins']">
                        @foreach ($rombels->pluck('location')->unique('id') as $lokasi)
                            <option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Program -->
            <div class="flex flex-row items-center">
                <div class="w-1/6 flex justify-end items-center">
                    <label for="program" class="font-['Poppins'] text-right px-2">Program</label>
                </div>
                <span class="px-1 font-['Poppins'] flex items-center">:</span>
                <div class="flex-grow flex items-center px-2">
                    <select id="program" name="program" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins']" disabled>
                        <option value="">-- Pilih Program --</option>
                    </select>
                </div>
            </div>

            <!-- Submit -->
            <div class="mt-1 mx-auto flex justify-center items-center">
                <input type="submit" value="Selanjutnya" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    let rombels = @json($rombels);
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const lokasiSelect = document.getElementById('lokasi');
    const programSelect = document.getElementById('program');

    lokasiSelect.addEventListener('change', function () {
        const selectedLocationId = this.value;
        programSelect.innerHTML = '<option value="">-- Pilih Program --</option>';
        
        if (!selectedLocationId) {
            programSelect.disabled = true;
            return;
        }

        // Ambil semua rombel berdasarkan lokasi
        const filtered = rombels.filter(item => item.location_id == selectedLocationId);
        const addedProgramIds = new Set();

        filtered.forEach(item => {
            const program = item.program;

            // Hindari duplikat program berdasarkan id
            if (!program || addedProgramIds.has(program.id)) return;

            addedProgramIds.add(program.id);

            const option = document.createElement('option');
            option.value = item.id; // rombel.id
            option.textContent = program.name;
            programSelect.appendChild(option);
        });

        programSelect.disabled = false;
    });
});
</script>

@endpush
