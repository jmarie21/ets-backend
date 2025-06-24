<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'event_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
