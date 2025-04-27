<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;
    public function Mom(): BelongsTo{
        return $this->belongsTo(Mom::class);
    }
    public function Dad(): BelongsTo{
        return $this->belongsTo(Dad::class);
    }
    public function Guardian(): BelongsTo{
        return $this->belongsTo(Guardian::class);
    }
    public function Student(): HasOne{
        return $this->hasOne(Student::class);
    }
    public function Registrant(): HasOne{
        return $this->hasOne(Registrant::class);
    }
}
