<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EarthquakePoint extends Model
{
    protected $fillable = [
        'longitude',
        'latitude',
        'name',
        'magnitude',
    ];
}
