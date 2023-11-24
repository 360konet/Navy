<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugs extends Model
{
    use HasFactory;

    protected $table='drugs';

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
        'drug_type',
        'culprit_vessel',
        'vessel_category',
        'total_tonnage',
    ];
}
