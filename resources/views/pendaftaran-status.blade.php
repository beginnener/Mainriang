@extends('layouts.pendaftaran')
<!-- Judul -->
@section('title')
    {{ $registrant->status_label }}
@endsection
@section('content')
    <div class="w-full my-8 flex flex-col justify-center font-['Poppins']">
        <div class="mx-48 flex flex-row gap-6 items-center">
            <div class="flex flex-col h-fit w-[1200px]">
                @if ($registrant->status == 7)
                    <span class="font-semibold text-left text-xl">
                        Silahkan lakukan pembayaran sebesar Rp. {{ number_format($registrant->rombel->program->prices, 0, ',', '.') }} 
                        ke rekening xxxxxxx (a.n admin main riang) untuk melanjutkan proses pendaftaran.
                        <br>
                    </span>
                    <div class="my-6">
                        <form class="flex flex-row items-center">
                            <div class="flex flex-col">
                                <label for="bukti_pembayaran" class="font-semibold text-lg">Upload Bukti Pembayaran:</label>
                                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*"
                                    class="border px-4 py-3 bg-zinc-200 border-none rounded-full font-['Poppins']">
                            </div>
                            <div class="mt-6 flex justify-center items-center">
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-6 py-4 rounded-full bg-purple-900 hover:bg-white hover:border hover:border-purple-900 text-white hover:text-black text-base text-center transition duration-300">
                                    Kirim Bukti Pembayaran
                                </button>
                            </div>
                        </form>
                    </div>
                    <span class="font-semibold text-left text-lg text-zinc-400">
                        *Halaman akan otomatis berubah setelah {{ strtolower($registrant->status_label) }} dikonfirmasi
                    </span>
                @else
                    <span class="font-semibold text-left text-xl">
                        Admin akan menghubungi anda melalui whatsapp untuk detail {{ strtolower($registrant->status_label) }}, mohon ditunggu..<br>
                    </span>
                    <span class="mt-2 font-semibold text-left text-lg text-zinc-400">">
                        *Halaman akan otomatis berubah setelah sesi {{ strtolower($registrant->status_label) }} selesai
                    </span>
                @endif
            </div>
            <span class="ml-10 px-6 transform scale-125">
                <img src="{{ asset('icon/karakter 1.svg') }}" alt="" class="">
            </span>
        </div>
    </div>
    {{-- block separator --}}
    <div class="w-full flex justify-center my-6"></div> 
@endsection