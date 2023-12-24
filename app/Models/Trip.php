<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';

    protected $fillable = [
        'location_id',
        'departure_date',
        'departure_time',
        'arrival_date',
        'arrival_time',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
