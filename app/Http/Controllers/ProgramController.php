<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Rombel;
use App\Models\Program;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $lokasiTerpilih = $request->lokasi_program;

        $listLocation = Location::all();
        $listProgram = Rombel::when($lokasiTerpilih, function ($query) use ($lokasiTerpilih) {
            $query->where('location_id', $lokasiTerpilih);
        })->get();
        return view('admin-program', compact('listLocation', 'listProgram'));
    }
    public function storeLocation(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255'
        ]);

        Location::create([
            'name' => $request->nama_lokasi,
        ]);

        return redirect()->back()->with('success', 'Lokasi berhasil ditambahkan.');
    }
    public function storeProgram(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'lokasi_id' => 'required|exists:locations,id'
        ]);

        $program = Program::create([
            'name' => $request->nama_program,
        ]);

        Rombel::create([
            'program_id' => $program->id,
            'location_id' => $request->lokasi_id,
        ]);

        return redirect()->back()->with('success', 'Program berhasil ditambahkan.');
    }
    public function destroyProgram($id)
    {
        $rombel = Rombel::findOrFail($id);
        $rombel->delete();

        return redirect()->back()->with('success', 'Program berhasil dihapus.');
    }

    public function destroyLocation($id)
    {
        $location = Location::findOrFail($id);

        // Cek apakah lokasi masih digunakan di rombels
        $rombelCount = Rombel::where('location_id', $id)->count();

        if ($rombelCount > 0) {
            return redirect()->back()->with('error', 'Tidak bisa menghapus lokasi karena masih digunakan di rombel.');
        }

        $location->delete();

        return redirect()->back()->with('success', 'Lokasi berhasil dihapus.');
    }
}
