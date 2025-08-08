@extends('layouts.pendaftaran')

@section('title','Pilih Program')

@section('content')

<x-title title="Pilih Program" />
<div class="w-full flex flex-col py-6 gap-6">
    <div class="w-full max-w-2xl mx-auto px-4">
        <form action="{{ route('daftar') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <!-- Lokasi -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/3 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="lokasi" class="font-['Poppins'] text-left md:text-right px-2">Lokasi</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <select id="lokasi" name="lokasi" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left">
                        @foreach ($rombels->pluck('location')->unique('id') as $lokasi)
                            <option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Program -->
            <div class="flex flex-col md:flex-row items-start md:items-center py-2">
                <div class="w-full md:w-1/3 flex justify-start md:justify-end items-center mb-1 md:mb-0">
                    <label for="program" class="font-['Poppins'] text-left md:text-right px-2">Program</label>
                </div>
                <span class="hidden md:flex px-1 font-['Poppins'] items-center">:</span>
                <div class="w-full md:flex-1 flex items-center px-2">
                    <select id="program" name="program" class="w-full py-3 px-4 bg-zinc-200 border-none rounded-full font-['Poppins'] text-left" disabled>
                        <option value="">-- Pilih Program --</option>
                    </select>
                </div>
            </div>
            <!-- Submit -->
            <div class="mt-4 mx-auto flex justify-center items-center">
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
