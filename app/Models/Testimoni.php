<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['nama_orang_tua', 'nama_anak', 'isi', 'foto', 'status'];
}
