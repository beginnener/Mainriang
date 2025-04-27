<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rombel extends Model
{
    use HasFactory;
    public function Student(): HasMany{
        return $this->hasMany(Student::class);
    }
    public function Registrant(): HasMany{
        return $this->hasMany(Registrant::class);
    }
    public function Location(): BelongsTo{
        return $this->belongsTo(Location::class);
    }
    public function Program(): BelongsTo{
        return $this->belongsTo(Program::class);
    }
}
