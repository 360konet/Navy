<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IUU extends Model
{
    use HasFactory;

    protected $table='iuu';

    protected $fillabble=[
        'country',
        'latitude_degrees',
        'latitude_minutes',
        'latitude_cardinal',
        'longitude_degrees',
        'longitude_minutes',
        'longitude_cardinal',
        'date',
        'time',
        'incident',
        'culprit_vessel',
        'incident_type',
    ];
}
