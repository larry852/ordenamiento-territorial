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
    public static function numeroMunicipios()
    {
        $array=Place::where('pattern',null)->get(['id','name'])->toArray();
        for($i=0;$i<33;$i++){
         $array[$i]=array_add($array[$i], 'count:', Place::where('pattern', $i+1)->count());}
     return $array;
}
    public static function searchNameDepartments($name)
    {
        $name = strtolower($name);
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
        $name = strtolower($name);
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
