<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function getHarga($programId)
    {
        $prices = Price::where('program_id', $programId)->get();

        return response()->json($prices);
    }
}
