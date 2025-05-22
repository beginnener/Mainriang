<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Description extends Model
{
    public function program(): BelongsTo{
        return $this->belongsTo(Program::class);
    }
}
