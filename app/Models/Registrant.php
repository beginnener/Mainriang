<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registrant extends Model
{
    use HasFactory;
    public function Child(): BelongsTo{
        return $this->belongsTo(Child::class);
    }
    public function Rombel(): BelongsTo{
        return $this->belongsTo(Rombel::class);
    }
}
