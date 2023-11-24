<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piracy extends Model
{
    use HasFactory;

    protected $table= 'piracy';

    protected $fillable= [
        'country',
        'latitude_degrees',
        'latitude_minutes',
        'latitude_cardinal',
        'longitude_degrees',
        'longitude_minutes',
        'longitude_cardinal',
        'date',
        'time',
        'culprit_vessel',
        'victim_vessel',
        'incident',
        'incident_type',
        'other_incident'
    ];
}
