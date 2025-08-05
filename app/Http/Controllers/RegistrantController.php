<?php

namespace App\Http\Controllers;

use App\Models\Dad;
use App\Models\Mom;
use App\Models\Child;
use App\Models\Rombel;
use App\Models\Program;
use App\Models\Guardian;
use App\Models\Location;
use App\Models\Registrant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rules\Unique;
use App\Exports\PendaftarExport;

class RegistrantController extends Controller
{
    // fungsi untuk menangani alur pendaftaran
    public function daftar(Request $request){
        if (Auth::id()){ // cek apakah user sudah login
            $id_user = Auth::id();
            if (!$request->id){ // jika tidak ada id registrant, berarti ini adalah pendaftaran baru, dengan step = 0 atau 'data daftar'
                $validate = $request->validate([ 
                    'email'           => 'required|email|max:255',
                    'phone_number'    => 'required|digits_between:10,15',
                    'nama'            => 'required|string|max:100',
                    'nama_panggilan'  => 'required|string|max:100',
                    'tempat_lahir'    => 'required|string|max:100',
                    'tanggal_lahir'   => 'required|date',
                    'jk'              => 'required'
                ]);

                $inisial = $this->ambilInisialAcak($validate['nama']);
                $hp = preg_replace('/\D/', '', $validate['phone_number']);
                $hp_akhir = substr($hp, -3);
                $tgl = date('dmy', strtotime($validate['tanggal_lahir']));

                do {
                    $acak = strtoupper(Str::random(2));
                    $kode = $inisial . $hp_akhir . $tgl . $acak;
                } while (Registrant::where('unique_id', $kode)->exists());
                                    
                $child = Child::create([
                    'nama' => $validate['nama'],  
                    'nama_panggilan' => $validate['nama_panggilan'],  
                    'tempat_lahir' => $validate['tempat_lahir'],  
                    'tanggal_lahir' => $validate['tanggal_lahir'],
                    'jk' => $validate['jk']
                ]);
                $registrant = Registrant::create([
                    'unique_id' => $kode,
                    'email' => $validate['email'],  
                    'phone_number' => $validate['phone_number'],  
                    'status' => 1, // ubah status menjadi 1 untuk pindah ke step berikutnya 
                    'user_id' => $id_user, 
                    'student_id' => $child->id, 
                ]);
                return redirect()->route('form', $registrant->unique_id);  
            }else{ // jika sudah ada id registrant, berarti ini adalah pendaftaran lanjutan
                $registrant = Registrant::where('unique_id', $request->id)->first(); // mencari data registrant berdasarkan unique_id
                if ($id_user == $registrant->user_id){ // cek apakah user yang login adalah pemilik registrant
                    if ($registrant->status == 1){ // jika status registrant adalah 1, maka masuk ke step 'isi data orang tua'
                        // validasi data orang tua
                        $rules = [
                            'nama_lengkap_ibu' => 'required|string|max:255',
                            'NIK_ibu' => 'required|digits:16|numeric',
                            'no_telp_ibu' => 'required|string|regex:/^08[0-9]{8,11}$/',
                            'pekerjaan_ibu' => 'required|string|max:255',
                            'pekerjaan_ibu_lainnya' => 'required|string|max:255',
                            'alamat_ibu' => 'required|string|max:255',

                            'nama_lengkap_ayah' => 'required|string|max:255',
                            'NIK_ayah' => 'required|digits:16|numeric',
                            'no_telp_ayah' => 'required|string|regex:/^08[0-9]{8,11}$/',
                            'pekerjaan_ayah' => 'required|string|max:255',
                            'pekerjaan_ayah_lainnya' => 'required|string|max:255',
                            'alamat_ayah' => 'required|string|max:255',

                            'punya_wali' => 'required|in:ya,tidak',
                        ];
                        // jika user tick opsi punya wali, maka tambahkan validasi untuk data wali
                        if ($request->punya_wali === 'ya') {
                            $rules = array_merge($rules, [
                                'nama_lengkap_wali' => 'required|string|max:255',
                                'NIK_wali' => 'required|digits:16|numeric',
                                'no_telp_wali' => 'required|string|regex:/^08[0-9]{8,11}$/',
                                'pekerjaan_wali' => 'required|string|max:255',
                                'pekerjaan_wali_lainnya' => 'required|string|max:255',
                                'alamat_wali' => 'required|string|max:255',
                            ]);
                        }
                        // memanggil model child 
                        $student = $registrant->Child;
                        // Simpan data ibu
                        $ibu = Mom::create([
                            'name' => $request->nama_lengkap_ibu,
                            'phone_number' => $request->no_telp_ibu,
                            'pekerjaan' => $request->pekerjaan_ibu === 'Lainnya' ? $request->pekerjaan_ibu_lainnya : $request->pekerjaan_ibu,
                            'alamat' => $request->alamat_ibu,
                        ]);

                        // Simpan data ayah
                        $ayah = Dad::Create([
                            'name' => $request->nama_lengkap_ayah,
                            'phone_number' => $request->no_telp_ayah,
                            'pekerjaan' => $request->pekerjaan_ayah === 'Lainnya' ? $request->pekerjaan_ayah_lainnya : $request->pekerjaan_ayah,
                            'alamat' => $request->alamat_ayah,
                        ]);
                        // Update data student dengan id ibu dan ayah
                        $student->update([
                            'mom_id' => $ibu->id,
                            'dad_id' => $ayah->id
                        ]);
                        // Jika punya wali, simpan data wali
                        if ($request->punya_wali === 'ya') {
                            $wali = Guardian::Create([
                                'name' => $request->nama_lengkap_wali,
                                'phone_number' => $request->no_telp_wali,
                                'pekerjaan' => $request->pekerjaan_wali === 'Lainnya' ? $request->pekerjaan_wali_lainnya : $request->pekerjaan_wali,
                                'alamat' => $request->alamat_wali,
                            ]);
                            $student->update(['guardian_id' => $wali->id,]); // update data student dengan id wali
                        }
                        $registrant->update(['status' => 2]); // ubah status registrant menjadi 2 untuk melanjutkan ke step 'konfirmasi bayar 1'
                        return redirect()->route('form', $registrant->unique_id); // redirect ke form dengan unique_id registrant
                    }
                    if ($registrant->status == 2){ // jika status registrant adalah 3, masuk ke step 'pilih program'
                        $registrant->update([
                            'rombel_id' => $request->program
                        ]);
                        $registrant->update(['status' => 3]);
                        return redirect()->route('form', $registrant->unique_id);
                    }
                } return back();
            }
        }   
    }

    public function showform ($id = null){
        if(Auth::id()){
            $id_user = Auth::id();
            if(!$id) return view('public.pendaftaran.pendaftaran-dataDaftar', ['currentStep' => 0]);
            $registrant = Registrant::where('unique_id', $id)->first();
            if($id_user == $registrant->user_id){
                $step = $registrant->status;
                switch ($step){
                    case 1: // step 'data ortu'
                        return view ('public.pendaftaran.pendaftaran-dataOrtu', ['id' => $id], ['currentStep' => $step]);
                    case 2: // step 'pilih program'
                        $rombels = Rombel::with(['program', 'location'])->get();
                        return view ('public.pendaftaran.pendaftaran-pilihProgram', compact('rombels', 'id'), ['currentStep' => $step]);
                    case 3: // step 'konfirmasi bayar 1'
                        return view ('public.pendaftaran.pendaftaran-status', compact('registrant'), ['currentStep' => $step]);
                    case 30: // step 'konfirmasi bayar 1 ditolak'
                        return view ('public.pendaftaran.pendaftaran-statusTolak', compact('registrant'), ['currentStep' => ($step / 10)]);
                    case 4: // step 'wawancara & asesmen'
                        return view ('public.pendaftaran.pendaftaran-status', compact('registrant'), ['currentStep' => $step]);
                    case 40: // step 'konfirmasi wawancara & asesmen ditolak'
                        return view ('public.pendaftaran.pendaftaran-statusTolak', compact('registrant'), ['currentStep' => ($step / 10)]);
                    case 5: // step 'konfirmasi data pendaftaran'
                        return view ('public.pendaftaran.pendaftaran-status', compact('registrant'), ['currentStep' => $step]);
                    case 50: // step 'konfirmasi wawancara & asesmen ditolak'
                        return view ('public.pendaftaran.pendaftaran-statusTolak', compact('registrant'), ['currentStep' => ($step / 10)]);
                    case 6: // step 'pembayaran'
                        return view ('public.pendaftaran.pendaftaran-statusTerima', compact('registrant'), ['currentStep' => $step]);
                    case 7: // step 'pembayaran'
                        return view('public.pendaftaran.pendaftaran-status', compact('registrant'), ['currentStep' => $step]);
                }
            }

        }return redirect('login');
    }

    public function showEdit($id)
    {
        $pendaftar = Registrant::where('unique_id', $id)->first();
        if (Auth::id() == $pendaftar->user_id) {
            return view('user.user-edit-detailPendaftaran', compact('pendaftar'));
        } else {
            return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke pendaftaran ini.');
        }
    }

    public function ambilInisialAcak($nama, $jumlah = 3){
        $huruf = str_split(preg_replace('/\s+/', '', strtoupper($nama))); // hilangkan spasi & kapital semua
        shuffle($huruf); // acak huruf
        return implode('', array_slice($huruf, 0, $jumlah)); // ambil sejumlah huruf
    }

    public function takeAll(Request $request)
    {
        // Ambil semua lokasi yang ada di rombel
        $listLokasi = Location::whereIn('id', Rombel::pluck('location_id')->unique())->get();

        // Jika lokasi dipilih, ambil program yang tersedia di lokasi itu saja
        if ($request->filled('lokasi')) {
            $listProgram = Program::whereIn('id', Rombel::where('location_id', $request->lokasi)->pluck('program_id')->unique())->get();
        } else {
            $listProgram = Program::whereIn('id', Rombel::pluck('program_id')->unique())->get();
        }

        $query = Registrant::query();

        // Filter lokasi
        if ($request->filled('lokasi')) {
            $query->whereHas('rombel', function($q) use ($request) {
                $q->where('location_id', $request->lokasi);
            });
        }

        // Filter program
        if ($request->filled('program')) {
            $query->whereHas('rombel', function($q) use ($request) {
                $q->where('program_id', $request->program);
            });
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('child', function($q) use ($search) {
                $q->where('nama', 'like', "%$search%");
            })->orWhere('unique_id', 'like', "%$search%");
        }

        // Filter status
        if ($request->filled('status')) {
            if ($request->status == '345') {
                $query->whereIn('status', [3,4,5]);
            } else {
                $query->where('status', $request->status);
            }
        }

        // Sorting
        $sort = $request->get('sort', 'created_at');
        $dir = $request->get('dir', 'desc');
        $query->orderBy($sort, $dir);

        // Ambil jumlah per halaman dari request, default 10
        $perPage = $request->get('per_page', 10);

        $pendaftar = $query->with(['child', 'rombel.program', 'rombel.location'])
            ->paginate($perPage)
            ->appends($request->except('page')); // agar filter tetap saat pindah halaman

        // Kirim $perPage ke view juga jika ingin
        return view('admin.admin-pendaftaran', compact('pendaftar', 'listLokasi', 'listProgram', 'perPage'));
    }

    public function takeOne ($id){
        $user = Auth::user();
        $pendaftar = Registrant::where('unique_id', $id)->firstOrFail();
        if($user->usertype === 'admin'){
            return view('admin.admin-detailPendaftaran')->with('pendaftar', $pendaftar);
        } else {
            if($pendaftar->user_id === $user->id){
                return view('user.user-detailPendaftaran')->with('pendaftar', $pendaftar);
            } else {
                return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke pendaftaran ini.');
            }
        }
        
    }

    public function terima($id)
    {
        $pendaftar = Registrant::findOrFail($id);
        $pendaftar->status += 1;
        $pendaftar->save();

        return redirect()->back()->with('success', 'Pendaftar diterima.');
    }

    public function tolak($id)
    {
        $pendaftar = Registrant::findOrFail($id);
        $pendaftar->status *= 10;
        $pendaftar->save();

        return redirect()->back()->with('success', 'Pendaftar ditolak.');
    }

    public function update(Request $request, $id)
    {
        $pendaftar = Registrant::where('unique_id', $id)->with(['Child.Mom', 'Child.Dad', 'Child.Guardian'])->firstOrFail();

        // Validasi data
        $validated = $request->validate([
            // Data Anak
            'nik' => 'nullable|string|max:20',
            'nama_panggilan'      => 'nullable|string|max:100',
            'tempat_lahir'        => 'nullable|string|max:100',
            'tanggal_lahir'       => 'nullable|date',
            'agama'               => 'nullable|string|max:50',
            'RT'                  => 'nullable|string|max:10',
            'RW'                  => 'nullable|string|max:10',
            'dusun'               => 'nullable|string|max:100',
            'kelurahan'           => 'nullable|string|max:100',
            'kecamatan'           => 'nullable|string|max:100',
            'kode_pos'            => 'nullable|string|max:10',
            'jenis_tinggal'       => 'nullable|string|max:100',
            'alat_transportasi'   => 'nullable|string|max:100',
            'lintang'             => 'nullable|numeric',
            'bujur'               => 'nullable|numeric',
            'berat_badan'         => 'nullable|numeric',
            'tinggi_badan'        => 'nullable|numeric',
            'lingkar_kepala'      => 'nullable|numeric',
            'jumlah_saudara'      => 'nullable|numeric',
            'anak_keberapa'       => 'nullable|numeric',
            'jarak_ke_sekolah'    => 'nullable|numeric',

            // Data Ibu
            'ibu_tanggal_lahir'        => 'nullable|date',
            'ibu_jenjang_pendidikan'   => 'nullable|string|max:100',
            'ibu_pekerjaan'            => 'nullable|string|max:100',
            'ibu_penghasilan'          => 'nullable|numeric',

            // Data Ayah
            'ayah_tanggal_lahir'        => 'nullable|date',
            'ayah_jenjang_pendidikan'   => 'nullable|string|max:100',
            'ayah_pekerjaan'            => 'nullable|string|max:100',
            'ayah_penghasilan'          => 'nullable|numeric',

            // Data Wali (jika ada)
            'wali_tanggal_lahir'        => 'nullable|date',
            'wali_jenjang_pendidikan'   => 'nullable|string|max:100',
            'wali_pekerjaan'            => 'nullable|string|max:100',
            'wali_penghasilan'          => 'nullable|numeric',

            // Dokumen
            'kartu_keluarga'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'akta_kelahiran'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Update data anak
        $child = $pendaftar->Child;
        $child->update([
            'NIK'               => $request->nik,
            'nama_panggilan'    => $request->nama_panggilan,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'agama'             => $request->agama,
            'RT'                => $request->RT,
            'RW'                => $request->RW,
            'dusun'             => $request->dusun,
            'kelurahan'         => $request->kelurahan,
            'kecamatan'         => $request->kecamatan,
            'kode_pos'          => $request->kode_pos,
            'jenis_tinggal'     => $request->jenis_tinggal,
            'alat_transportasi' => $request->alat_transportasi,
            'lintang'           => $request->lintang,
            'bujur'             => $request->bujur,
            'berat_badan'       => $request->berat_badan,
            'tinggi_badan'      => $request->tinggi_badan,
            'lingkar_kepala'    => $request->lingkar_kepala,
            'jumlah_saudara'    => $request->jumlah_saudara,
            'anak_keberapa'     => $request->anak_keberapa,
            'jarak_ke_sekolah'  => $request->jarak_ke_sekolah,
        ]);

        // Update data ibu
        if ($child->Mom) {
            $child->Mom->update([
                'NIK' => $request->ibu_nik,
                'alamat'             => $request->ibu_alamat,
                'tempat_lahir'       => $request->ibu_tempat_lahir,
                'tanggal_lahir'      => $request->ibu_tanggal_lahir,
                'phone_number'       => $request->ibu_no_telp,
                'email'              => $request->ibu_email,
                'jenjang_pendidikan' => $request->ibu_jenjang_pendidikan,
                'pekerjaan'          => $request->ibu_pekerjaan,
                'penghasilan'        => $request->ibu_penghasilan,
            ]);
        }

        // Update data ayah
        if ($child->Dad) {
            $child->Dad->update([
                'NIK' => $request->ayah_nik,
                'alamat'             => $request->ayah_alamat,
                'tempat_lahir'       => $request->ayah_tempat_lahir,
                'tanggal_lahir'      => $request->ayah_tanggal_lahir,
                'phone_number'       => $request->ayah_no_telp,
                'email'              => $request->ayah_email,
                'jenjang_pendidikan' => $request->ayah_jenjang_pendidikan,
                'pekerjaan'          => $request->ayah_pekerjaan,
                'penghasilan'        => $request->ayah_penghasilan,
            ]);
        }

        // Update data wali jika ada
        if ($child->Guardian) {
            $child->Guardian->update([
                'NIK' => $request->wali_nik,
                'alamat'             => $request->wali_alamat,
                'tempat_lahir'       => $request->wali_tempat_lahir,
                'tanggal_lahir'      => $request->wali_tanggal_lahir,
                'phone_number'       => $request->wali_no_telp,
                'email'              => $request->wali_email,
                'jenjang_pendidikan' => $request->wali_jenjang_pendidikan,
                'pekerjaan'          => $request->wali_pekerjaan,
                'penghasilan'        => $request->wali_penghasilan,
            ]);
        }

        // Upload dokumen jika ada file baru
        if ($request->hasFile('kartu_keluarga')) {
            $filename = $pendaftar->unique_id . '_kartu-keluarga.' . $request->file('kartu_keluarga')->getClientOriginalExtension();
            $kkPath = $request->file('kartu_keluarga')->storeAs('dokumen', $filename, 'public');
            $child->update(['kartu_keluarga' => $kkPath]);
        }
        if ($request->hasFile('akta_kelahiran')) {
            $filename = $pendaftar->unique_id . '_akta-kelahiran.' . $request->file('akta_kelahiran')->getClientOriginalExtension();
            $aktaPath = $request->file('akta_kelahiran')->storeAs('dokumen', $filename, 'public');
            $child->update(['akta_kelahiran' => $aktaPath]);
        }

        return redirect()->route('detail-pendaftaran', $pendaftar->unique_id)
            ->with('success', 'Data pendaftaran berhasil diperbarui.');
    }

    public function statistik()
    {
        $registrants = \App\Models\Registrant::with(['rombel.program', 'rombel.location'])->get();

        $total = $registrants->count();

        $byLokasi = $registrants->groupBy(fn($r) => $r->rombel->location->name ?? 'Tanpa Lokasi')
            ->map->count();

        $byProgram = [];
        foreach ($registrants as $r) {
            $lokasi = $r->rombel->location->name ?? 'Tanpa Lokasi';
            $program = $r->rombel->program->name ?? 'Tanpa Program';
            if (!isset($byProgram[$lokasi])) $byProgram[$lokasi] = [];
            if (!isset($byProgram[$lokasi][$program])) $byProgram[$lokasi][$program] = 0;
            $byProgram[$lokasi][$program]++;
        }

        $statusLabels = [
            1 => 'Mengisi Data Orang Tua',
            2 => 'Memilih Program',
            3 => 'Pembayaran Pendaftaran',
            4 => 'Wawancara & Asesmen',
            5 => 'Pembayaran Pendidikan',
            6 => 'Pembayaran',
            7 => 'Data Sudah Lengkap',
            30 => 'Ditolak Saat Pembayaran 1',
            40 => 'Ditolak Saat Wawancara',
            50 => 'Ditolak Saat Pembayaran Pendidikan',
        ];
        $byStatus = $registrants->groupBy('status')->mapWithKeys(function($group, $status) use ($statusLabels) {
            return [ $statusLabels[$status] ?? $status => $group->count() ];
        });

        return view('admin.admin-statistik', compact('total', 'byLokasi', 'byProgram', 'byStatus'));
    }

    public function downloadDokumen($id, $jenis)
    {
        $pendaftar = Registrant::where('unique_id', $id)->firstOrFail();
        $child = $pendaftar->Child;

        if ($jenis === 'kartu_keluarga' && $child->kartu_keluarga) {
            return response()->download(storage_path('app/public/' . $child->kartu_keluarga));
        } elseif ($jenis === 'akta_kelahiran' && $child->akta_kelahiran) {
            return response()->download(storage_path('app/public/' . $child->akta_kelahiran));
        } else {
            return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');
        }
    }

    public function export()
    {
        return Excel::download(new PendaftarExport, 'data_pendaftar.xlsx');
    }


}
