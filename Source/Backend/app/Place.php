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

        $id_muni= Place::where('pattern',null)->get(['id'])->toArray();
        $array=Place::where('pattern',null)->get(['id','name'])->toArray();

        for($i=0;$i<sizeof($id_muni);$i++){
         $array[$i]=array_add($array[$i], 'count:', Place::where('pattern', $id_muni[$i])->count());
        }
        
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

    public static function totalAreaMunicipio($id_municipio)
    {
        
      $id_zonas= Zone::where('id_place',$id_municipio)->get(['id'])->toArray();
      //$array= Zone::where('id_place',$id_municipio)->get(['id','name'])->toArray();
         $total=0;
      for($i=0;$i<sizeof($id_zonas);$i++){
          $area = (float) Area::where('id_zone', $id_zonas[$i])->get(['measure'])->toArray()[0]["measure"];
          $total=(float)$total+$area;
          //$array[$i]=array_add($array[$i], 'area:', $area);
      }
      return $total;
  }



  public static function areaMunicipios($id_departamento)
    {
        
      $id_municipios= Place::where('pattern',$id_departamento)->get(['id'])->toArray();
      $array= Place::where('pattern',$id_departamento)->get(['id','name'])->toArray();

      for($i=0;$i<sizeof($id_municipios);$i++){
         // $area = (float) Area::where('id_zone', $id_zonas[$i])->get(['measure']);

        $area[]= Place::totalAreaMunicipio($id_municipios[$i]);
        $array[$i]=array_add($array[$i], 'area:', $area[$i]);
      }

      return $array;
  }


}
