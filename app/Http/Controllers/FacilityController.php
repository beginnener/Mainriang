<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function preview()
    {
        return view('admin.admin-fasilitas');
    }
}
