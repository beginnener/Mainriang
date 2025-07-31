<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function preview()
    {
        return view('admin-testimoni'); 
    }
}
