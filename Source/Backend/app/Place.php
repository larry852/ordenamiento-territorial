<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'dane', 'flag','pattern',
    ];

    public static function consultamunicipios($id_departamento)
    {
    	return Place::where('pattern',$id_departamento)->get();
        
    }

    public static function consultadepartamentos()
    {
    	return Place::where('pattern',null)->get();
        
    }
}
