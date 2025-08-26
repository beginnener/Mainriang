<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];
    public function Rombel(): HasMany{
        return $this->hasMany(Rombel::class);
    }
    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class);
    }
}
