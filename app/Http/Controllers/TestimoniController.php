<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function preview()
    {
        $testimonis = Testimoni::latest()->get();
        return view('admin.admin-testimoni', compact('testimonis'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nama_anak' => 'nullable|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:publish,draft',
        ]);

        // Simpan foto jika ada
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        // Simpan data ke database
        Testimoni::create($validated);

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return response()->json($testimoni);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nama_anak' => 'nullable|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:publish,draft',
        ]);

        $testimoni = Testimoni::findOrFail($id);

        // Update foto jika ada file baru
        if ($request->hasFile('foto')) {
            if ($testimoni->foto && Storage::disk('public')->exists($testimoni->foto)) {
                Storage::disk('public')->delete($testimoni->foto);
            }
            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        $testimoni->update($validated);

        return redirect()->back()->with('success', 'Testimoni berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        // Hapus foto jika ada
        if ($testimoni->foto && Storage::disk('public')->exists($testimoni->foto)) {
            Storage::disk('public')->delete($testimoni->foto);
        }

        $testimoni->delete();

        return redirect()->back()->with('success', 'Testimoni berhasil dihapus.');
    }
}
