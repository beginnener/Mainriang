<?php

namespace App\Http\Controllers;

use App\Models\Dad;
use App\Models\Mom;
use App\Models\Child;
use App\Models\Program;
use App\Models\Guardian;
use App\Models\Registrant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rules\Unique;

class RegistrantController extends Controller
{
    public function daftar(Request $request){
        if (Auth::id()){
            $id_user = Auth::id();
            if (!$request->id){
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
                    'status' => 1,  
                    'user_id' => $id_user, 
                    'student_id' => $child->id, 
                ]);
                return redirect()->route('form', $registrant->unique_id);  
            }else{
                $registrant = Registrant::where('unique_id', $request->id)->first();
                if ($id_user == $registrant->user_id){
                    if ($registrant->status == 1){
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
                        $student = $registrant->Child;
                        // Simpan data ibu
                        $ibu = Mom::firstOrCreate(['NIK' => $request->NIK_ibu], 
                        [
                            'name' => $request->nama_lengkap_ibu,
                            'NIK' => $request->NIK_ibu,
                            'phone_number' => $request->no_telp_ibu,
                            'pekerjaan' => $request->pekerjaan_ibu === 'Lainnya' ? $request->pekerjaan_ibu_lainnya : $request->pekerjaan_ibu,
                            'alamat' => $request->alamat_ibu,
                        ]);

                        
                        // Simpan data ayah
                        $ayah = Dad::firstOrCreate(['NIK' => $request->NIK_ayah],
                        [
                            'name' => $request->nama_lengkap_ayah,
                            'NIK' => $request->NIK_ayah,
                            'phone_number' => $request->no_telp_ayah,
                            'pekerjaan' => $request->pekerjaan_ayah === 'Lainnya' ? $request->pekerjaan_ayah_lainnya : $request->pekerjaan_ayah,
                            'alamat' => $request->alamat_ayah,
                        ]);
                        $student->update([
                            'mom_id' => $ibu->id,
                            'dad_id' => $ayah->id
                        ]);
                        // Jika punya wali, simpan data wali
                        if ($request->punya_wali === 'ya') {
                            $wali = Guardian::firstOrCreate(['NIK' => $request->NIK_wali],
                            [
                                'name' => $request->nama_lengkap_wali,
                                'NIK' => $request->NIK_wali,
                                'phone_number' => $request->no_telp_wali,
                                'pekerjaan' => $request->pekerjaan_wali === 'Lainnya' ? $request->pekerjaan_wali_lainnya : $request->pekerjaan_wali,
                                'alamat' => $request->alamat_wali,
                            ]);
                            $student->update(['guardian_id' => $wali->id,]);
                        }
                        $registrant->update(['status' => 2]);
                        return redirect()->route('form', $registrant->unique_id);
                    }
                } return back();
            }
        }   
    }

    public function showform ($id = null){
        if(Auth::id()){
            $id_user = Auth::id();
            if(!$id) return view('pendaftaran-dataDaftar');
            $registrant = Registrant::where('unique_id', $id)->first();
            if($id_user == $registrant->user_id){
                $step = $registrant->status;
                switch ($step){
                    case 1:
                        return view ('pendaftaran-dataOrtu', ['id' => $id]);
                    case 2:
                        return view ('pendaftaran-konfirmasiBayar1', ['id' => $id]);
                    case 3:
                        $programs = Program::all();
                        return view ('pendaftaran-pilihProgram', compact('programs', 'id'));
                }
            }
        }return redirect('login');
    }

    public function ambilInisialAcak($nama, $jumlah = 3){
        $huruf = str_split(preg_replace('/\s+/', '', strtoupper($nama))); // hilangkan spasi & kapital semua
        shuffle($huruf); // acak huruf
        return implode('', array_slice($huruf, 0, $jumlah)); // ambil sejumlah huruf
    }
}
