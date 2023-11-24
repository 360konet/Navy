<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritimeAccident extends Model
{
    use HasFactory;

    protected $table= 'maritime_accident';

    protected $fillable = [
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
        'accident_category',
        'other_accident',
        'vessel_involved'
    ];
}
