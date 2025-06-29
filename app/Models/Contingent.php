<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contingent extends Model
{
    protected $fillable = [
        'name',
        'age',
        'address',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
