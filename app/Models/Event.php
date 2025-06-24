<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name',
        'description',
        'date',
        'location',
        'organizer_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contingents()
    {
        return $this->hasMany(Contingent::class);
    }

    public function judges()
    {
        return $this->hasMany(Judge::class);
    }
}
