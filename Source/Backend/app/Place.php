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
    	return Place::where('pattern', $id_departamento)->get()->toArray();
        
    }

    public static function consultadepartamentos()
    {
    	return Place::where('pattern', null)->get()->toArray();
        
    }

    public static function searchNameDepartments($name)
    {
        $name = ucfirst(strtolower($name));
        return Place::where([
            ['name', 'like', '%'.$name.'%'],
            ['pattern', null]
        ])
        ->get()->toArray();
        
    }

    public static function searchDaneDepartments($dane)
    {
        return Place::where([
            ['dane', $dane],
            ['pattern', null]
        ])
        ->get()->toArray();
        
    }

    public static function searchNameCities($name, $id_department)
    {
        $name = ucfirst(strtolower($name));
        return Place::where([
            ['name', 'like', '%'.$name.'%'],
            ['pattern', $id_department]
        ])
        ->get()->toArray();
        
    }

    public static function searchDaneCities($dane, $id_department)
    {
        return Place::where([
            ['dane', $dane],
            ['pattern', $id_department]
        ])
        ->get()->toArray();
        
    }
}
