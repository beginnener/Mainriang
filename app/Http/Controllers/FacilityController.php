<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function preview()
    {
        $facilities = Facility::all();
        $locations = Location::all(); // Assuming you have a Location model
        return view('admin.admin-fasilitas', compact('facilities', 'locations'));
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:draf,publish',
            'location_id' => 'nullable|exists:locations,id',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('facilities', 'public');
        }

        Facility::create($validate);

        return redirect()->back()->with('success', 'Facility created successfully.');
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return response()->json($facility);
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:draf,publish',
            'location_id' => 'nullable|exists:locations,id',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('facilities', 'public');
        }

        $facility->update($validate);

        return redirect()->back()->with('success', 'Facility updated successfully.');
    }

    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        if ($facility->image && Storage::disk('public')->exists($facility->image)) {
            Storage::disk('public')->delete($facility->image);
        }
        $facility->delete();

        return redirect()->back()->with('success', 'Facility deleted successfully.');
    }
}
