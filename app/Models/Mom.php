<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mom extends Model
{  
    protected $fillable = ['name', 'NIK', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'phone_number', 'email', 'jenjang_pendidikan', 'penghasilan', 'pekerjaan'];
    protected $hidden = ['NIK', 'phone_number', 'email'];
    use HasFactory;
    public function Child(): HasMany{
        return $this->hasMany(Child::class);
    }
}
