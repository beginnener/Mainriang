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
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
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
                    <select id="programSelect" name="program" class="w-full h-16 px-6 bg-zinc-200 border-none rounded-full font-['Poppins']">
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Rincian Harga -->
            <div id="rincianHarga" class="px-6 py-4 bg-white rounded-xl shadow-md font-['Poppins'] text-zinc-800 mx-6">
                <p class="font-semibold mb-2">Rincian Harga:</p>
                <ul class="list-disc list-inside text-sm space-y-1" id="hargaList">
                    <li>Silakan pilih program terlebih dahulu.</li>
                </ul>
            </div>

            <!-- Submit -->
            <div class="mt-1 mx-auto flex justify-center items-center">
                <input type="submit" value="Selanjutnya" class="inline-flex items-center justify-center w-80 h-16 rounded-full bg-gradient-to-l from-orange-400 to-amber-300 shadow-[0px_7px_4px_0px_rgba(33,0,58,0.5)] text-black text-xl font-bold text-center transition hover:shadow-none hover:translate-y-1">
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('programSelect').addEventListener('change', function() {
    const programId = this.value;

    fetch(`/get-harga/${programId}`)
        .then(response => response.json())
        .then(data => {
            const hargaList = document.getElementById('hargaList');
            hargaList.innerHTML = '';

            if (data.length > 0) {
                data.forEach(harga => {
                    const item = document.createElement('li');
                    item.textContent = `${harga.desc}: Rp${parseInt(harga.price).toLocaleString('id-ID')}`;
                    hargaList.appendChild(item);
                });
            } else {
                hargaList.innerHTML = '<li>Tidak ada rincian harga tersedia untuk program ini.</li>';
            }
        })
        .catch(error => {
            document.getElementById('hargaList').innerHTML = '<li>Gagal mengambil data harga.</li>';
            console.error('Fetch error:', error);
        });
});
</script>
@endsection
