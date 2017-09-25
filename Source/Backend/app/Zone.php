<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'name', 'description', 'symbol','last_modified','id_place',
    ];
}
