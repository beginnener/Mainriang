<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function Rombel(): HasMany{
        return $this->hasMany(Rombel::class);
    }
    public function Price(): HasMany{
        return $this->hasMany(Price::class);
    }
    public function Description(): HasMany{
        return $this->hasMany(Description::class);
    }
}
