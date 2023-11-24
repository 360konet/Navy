<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class illegalMigration extends Model
{
    use HasFactory;

    protected $table = 'illegal_migration';

    protected $fillable = [
        'country',
        'date',
        'time',
        'incident',
        'incident_category',
        'sp_latitude_degrees',
        'sp_latitude_minutes',
        'sp_latitude_cardinal',
        'sp_longitude_degrees',
        'sp_longitude_minutes',
        'sp_longitude_cardinal',
        'dp_latitude_degrees',
        'dp_latitude_minutes',
        'dp_latitude_cardinal',
        'dp_longitude_degrees',
        'dp_longitude_minutes',
        'dp_longitude_cardinal',
        'individual_numbers',
    ];
}
