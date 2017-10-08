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
    	return Place::where('pattern',$id_departamento)->get()->toArray();
        
    }

    public static function consultadepartamentos()
    {
    	return Place::where('pattern',null)->get()->toArray();
        
    }

    public static function searchName($name)
    {
        $name = ucfirst(strtolower($name));
        return Place::where([
            ['name', 'LIKE', '%'.$name.'%'],
            ['pattern',null]
        ])
        ->get()->toArray();
        
    }

    public static function searchDane($dane)
    {
        return Place::where([
            ['dane', $dane],
            ['pattern',null]
        ])
        ->get()->toArray();
        
    }
}
