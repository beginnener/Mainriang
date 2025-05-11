<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registrant extends Model
{
    protected $fillable = ['unique_id', 'phone_number', 'email', 'status', 'student_id', 'rombel_id', 'user_id'];
    protected $hidden = ['student_id'];
    use HasFactory;
    public function Child(): BelongsTo{
        return $this->belongsTo(Child::class);
    }
    public function Rombel(): BelongsTo{
        return $this->belongsTo(Rombel::class);
    }
}
