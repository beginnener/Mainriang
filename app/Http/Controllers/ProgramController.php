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
        return view('admin.admin-program', compact('listLocation', 'listProgram'));
    }
    public function storeLocation(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat_lokasi' => 'required|string|max:255',
        ]);

        Location::create([
            'name' => $request->nama_lokasi,
            'address' => $request->alamat_lokasi,
        ]);

        return redirect()->back()->with('success', 'Lokasi berhasil ditambahkan.');
    }
    public function updateLocation(Request $request, $id)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'alamat_lokasi' => 'required|string|max:255',
        ]);

        $lokasi = Location::findOrFail($id);
        $lokasi->name = $request->nama_lokasi;
        $lokasi->address = $request->alamat_lokasi;
        $lokasi->save();

        return redirect()->back()->with('success', 'Lokasi berhasil diupdate.');
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
    public function destroyLocation($id)
    {
        $location = Location::findOrFail($id);

        // Cari semua rombel yang pakai location ini
        $rombels = Rombel::where('location_id', $id)->get();

        // Soft delete semua rombel terkait
        foreach ($rombels as $rombel) {
            $rombel->delete();
        }

        // Soft delete location
        $location->delete();

        return redirect()->back()->with('success', 'Lokasi dan semua rombel terkait berhasil dihapus.');
    }

    public function destroyProgram($id)
    {
        // Cari semua rombel yang pakai program ini
        $rombels = Rombel::where('program_id', $id)->get();

        // Soft delete semua rombel terkait
        foreach ($rombels as $rombel) {
            $rombel->delete();
        }

        // Soft delete program
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->back()->with('success', 'Program dan semua rombel terkait berhasil dihapus.');
    }
}
