<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
        'location_id',
    ];
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
