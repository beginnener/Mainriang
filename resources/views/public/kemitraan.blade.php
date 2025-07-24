@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <x-hero 
        img="{{ asset('images/Banner.png') }}"
        title="Bermitra Dengan Main Riang"
        subtitle="Buka peluang usaha bermakna di dunia pendidikan Islam anak usia dini.
                Gabung kemitraan Main Riang dengan sistem berbasis nilai-nilai Islam."
    />
    <div class="p-6 lg:p-8">
        {{-- content section --}}
        <section id="stakeholder" class="mt-8">
            <div id="card" class="flex flex-col items-center gap-4 p-4">
                <h3 class="font-['Poppins'] font-bold text-2xl mb-4">Pihak-pihak yang terlibat</h3>
                <div class="flex flex-col md:flex-row gap-4 items-center">
                    <div class="max-w-80 flex flex-col items-center justify-center p-8 gap-2 aspect-square border rounded-[48px] text-center 
                        group relative overflow-hidden transition-colors duration-300">
                        <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[48px]"></div>
                        
                        <h4 class="text-lg font-bold relative z-10 group-hover:text-white transition-colors duration-300">Pemilik Lisensi</h4>
                        <p class="relative z-10 group-hover:text-white transition-colors duration-300">  
                            Pihak pengelola utama brand Main Riang Islamic Preschool, yang memiliki kurikulum, 
                            sistem operasional, standar mutu, pelatihan, dan identitas sekolah.
                        </p>
                    </div>
                    <div class="max-w-80 flex flex-col items-center justify-center p-8 gap-2 aspect-square border rounded-[48px] text-center 
                        group relative overflow-hidden transition-colors duration-300">
                        <div class="absolute inset-0 bg-gradient-to-l from-orange-400 to-amber-300 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out rounded-[48px]"></div>
                        <h4 class="text-lg font-bold relative z-10 group-hover:text-white transition-colors duration-300">Investor/Mitra Cabang</h4>
                        <p class="relative z-10 group-hover:text-white transition-colors duration-300"> 
                            Pihak yang menyediakan modal awal untuk pendirian dan operasional cabang.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- peran kontribusi --}}
        <section id="contribution" class="mt-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <h3 class="font-['Poppins'] font-bold text-2xl mb-8 text-center">Peran dan Kontribusi Masing-masing Pihak</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Card: Pemilik Lisensi -->
                    <div class="border rounded-3xl p-6 bg-white">
                        <div class="flex flex-col items-start gap-2">
                            <h4 class="text-lg font-semibold mb-2">Pemilik Lisensi (Main Riang Center) Menyediakan:</h4>
                            <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
                                <li>Lisensi nama dan brand “Main Riang Islamic Preschool”.</li>
                                <li>Kurikulum lengkap dan sistem pembelajaran.</li>
                                <li>Standar operasional, buku panduan guru, SOP harian.</li>
                                <li>Pelatihan awal dan berkala untuk guru dan manajemen.</li>
                                <li>Sistem manajemen sekolah (sistem informasi, marketing toolkit, dll).</li>
                                <li>Supervisi dan evaluasi rutin cabang.</li>
                            </ul>
                            <h4 class="text-md font-semibold mt-4">Mendapatkan:</h4>
                            <p class="text-sm text-gray-800">Persentase bagi hasil dari pendapatan bersih atau kotor sesuai kesepakatan.</p>
                        </div>
                    </div>

                    <!-- Card: Mitra/Investor -->
                    <div class="border rounded-3xl p-6 bg-white">
                        <div class="flex flex-col items-start gap-2">
                            <h4 class="text-lg font-semibold mb-2">Investor/Mitra Cabang Menyediakan:</h4>
                            <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
                                <li>Modal awal (sewa/beli tempat, renovasi, peralatan, gaji guru/staf, marketing lokal).</li>
                                <li>Operasional harian: manajemen guru, staf, dan kegiatan belajar-mengajar.</li>
                                <li>Bertanggung jawab atas performa harian cabang.</li>
                            </ul>
                            <h4 class="text-md font-semibold mt-4">Mendapatkan:</h4>
                            <p class="text-sm text-gray-800">Hak operasional cabang dan bagi hasil dari keuntungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagi Hasil -->
        <section id="revenue-sharing" class="mt-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h3 class="font-['Poppins'] font-bold text-2xl mb-8 text-center">Skema Bagi Hasil yang Disarankan</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Model A -->
                    <div class="border rounded-3xl p-6 bg-white">
                        <h4 class="text-lg font-semibold mb-3">Model A: Revenue Sharing (Pendapatan Kotor)</h4>
                        <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
                            <li>Pemilik Lisensi: 10–15% dari total pendapatan bulanan.</li>
                            <li>Investor/Mitra Cabang: 85–90% untuk biaya operasional & margin laba.</li>
                        </ul>
                    </div>

                    <!-- Model B -->
                    <div class="border rounded-3xl p-6 bg-white">
                        <h4 class="text-lg font-semibold mb-3">Model B: Profit Sharing (Keuntungan Bersih)</h4>
                        <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
                            <li>Pemilik Lisensi: 30–40% dari keuntungan bersih.</li>
                            <li>Investor/Mitra Cabang: 60–70% dari keuntungan bersih.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jangka Waktu Kerja Sama -->
        <section id="jangka-waktu" class="mt-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <h3 class="font-['Poppins'] font-bold text-2xl mb-8 text-center">Jangka Waktu Kerja Sama</h3>
                <div class="relative bg-white rounded-3xl p-6 sm:p-8 flex flex-col gap-6 items-start border">
                    <ul class="list-disc pl-5 space-y-2 text-sm text-gray-800">
                        <li>Durasi awal kontrak: <span class="font-semibold text-purple-950">5 tahun</span>, dengan opsi perpanjangan.</li>
                        <li>Evaluasi per tahun terkait kinerja, komitmen, dan potensi ekspansi.</li>
                        <li>Di akhir kontrak, investor dapat:
                            <ul class="list-disc pl-5 space-y-1 mt-1">
                                <li>Memperpanjang kontrak.</li>
                                <li>Menjual kembali unit cabang ke pusat atau mitra lain (dengan harga pasar).</li>
                                <li>Mengubah bentuk kerja sama dengan syarat tetap menjaga branding.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Hak dan Kewajiban Tambahan -->
        <section id="hak-kewajiban" class="mt-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h3 class="font-['Poppins'] font-bold text-2xl mb-8 text-center">Hak dan Kewajiban</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Kartu Mitra -->
                    <div class="bg-white border rounded-3xl p-6 shadow-sm">
                        <div class="flex flex-col items-start gap-4">
                            <h4 class="text-lg font-semibold mb-2">Investor / Mitra Cabang</h4>
                            <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
                                <li>Menjaga standar mutu dan nilai-nilai Islam sesuai identitas Main Riang.</li>
                                <li>Tidak boleh membuka sekolah serupa dengan sistem yang sama tanpa izin pusat.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Kartu Pemilik Lisensi -->
                    <div class="bg-white border rounded-3xl p-6 shadow-sm">
                        <div class="flex flex-col items-start gap-4">
                            <h4 class="text-lg font-semibold mb-2">Pemilik Lisensi</h4>
                            <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
                                <li>Memberikan pelatihan, bahan ajar, monitoring, dan update kurikulum secara berkala.</li>
                                <li>Memastikan pengembangan brand dan strategi nasional tetap berjalan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section class="CTA bg-white">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900">Bergabunglah Bersama Kami</h2>
            <p class="mt-2 text-gray-700 text-base sm:text-lg">Jadilah bagian dari jaringan pendidikan Islam yang berkualitas dan berdampak.</p>
            <p class="text-sm text-gray-600">Masih ada pertanyaan? Jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda!</p>

            <div class="mt-4 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="inline-block px-6 py-3 bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 text-white font-semibold rounded-full shadow-lg hover:scale-105 transform transition-all duration-300">
                    Daftar Sekarang
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="inline-block px-6 py-3 bg-purple-900 text-white font-semibold rounded-full shadow-lg hover:bg-purple-800 transition duration-300">
                    Hubungi Admin
                </a>
            </div>

        </div>
    </section>

@endsection