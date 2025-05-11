<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Registrant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class RegistrantController extends Controller
{
    public function daftar(Request $request){
        if (Auth::id()){
            $status = session()->get('status_pendaftaran');
            if (!$request->id){
                if ($status == 1){
                    $id_user = Auth::id();
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
                    session(['id_pendaftaran' => $registrant->id]);
                    return view('pendaftaran-dataOrtu');
                    
                }
                elseif ($status == 0) {
                    session(['status_pendaftaran' => 1]); // simpan di session
                    return view('pendaftaran-dataDaftar');
                }
            }else{

            }
        }

        return view('auth.login');
    }

    public function ambilInisialAcak($nama, $jumlah = 3){
        $huruf = str_split(preg_replace('/\s+/', '', strtoupper($nama))); // hilangkan spasi & kapital semua
        shuffle($huruf); // acak huruf
        return implode('', array_slice($huruf, 0, $jumlah)); // ambil sejumlah huruf
    }
}
