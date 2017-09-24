<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'latitude_start', 'latitude_end', 'longitude_start','longitude_end','description','id_zone',
    ];
}
