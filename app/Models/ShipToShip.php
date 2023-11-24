<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipToShip extends Model
{
    use HasFactory;

    protected $table= 'ship_to_ship';

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
        'incident',
        'vessel_type',
    ];
}
