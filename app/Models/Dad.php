<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dad extends Model
{
    use HasFactory;
    public function Child(): HasMany{
        return $this->hasMany(Child::class);
    }
}
