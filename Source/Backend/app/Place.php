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


    public static function consultanombredepartamentos($nombre_departamento)
    {
        return Place::where('name',$nombre_departamento)->get();
        
    }


    public static function consultadanedepartamentos($dane_departamento)
    {
        return Place::where('dane',$dane_departamento)->get();
        
    }

       public static function consultanombremunicipios($nombre_municipio)
    {
        return Place::where('name',$nombre_municipio)->get();
        
    }


    public static function consultadanemunicipios($dane_municipio)
    {
        return Place::where('dane',$dane_municipio)->get();
        
    }
}
