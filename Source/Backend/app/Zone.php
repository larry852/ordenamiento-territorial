<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Area;

class Zone extends Model
{
    protected $fillable = [
        'name', 'description', 'symbol','last_modified','id_place',
    ];


    public static function consultazonas($id_municipio)
    {
        return Zone::where('id_place',$id_municipio)
        ->leftJoin('usos', 'zones.id', '=', 'usos.id_zone')
        ->leftJoin('areas', 'zones.id', '=', 'areas.id_zone')
        ->leftJoin('locations', 'zones.id', '=', 'locations.id_zone')
        ->select('zones.*', 'usos.description as use', 'areas.measure', 'areas.unit', 'locations.latitude_start', 'locations.latitude_end', 'locations.longitude_start', 'locations.longitude_end')
        ->get()->toArray();
        
    }

    public static function detailZone($id_zone)
    {

        return Zone::where('zones.id',$id_zone)
        ->leftJoin('usos', 'zones.id', '=', 'usos.id_zone')
        ->leftJoin('areas', 'zones.id', '=', 'areas.id_zone')
        ->leftJoin('locations', 'zones.id', '=', 'locations.id_zone')
        ->select('zones.*', 'usos.description as use', 'areas.measure', 'areas.unit', 'locations.latitude_start', 'locations.latitude_end', 'locations.longitude_start', 'locations.longitude_end')
        ->get()->toArray();

        
    }

    public static function searchDetailZones($text, $id_city)
    {
        $text = strtolower($text);
        return Zone::where([
            ['zones.name', 'like', '%'.$text.'%'],
            ['zones.id_place', $id_city]
        ]) 
        ->orWhere([
            ['usos.description', 'like', '%'.$text.'%'],
            ['zones.id_place', $id_city]
        ])
        ->leftJoin('usos', 'zones.id', '=', 'usos.id_zone')
        ->leftJoin('areas', 'zones.id', '=', 'areas.id_zone')
        ->leftJoin('locations', 'zones.id', '=', 'locations.id_zone')
        ->select('zones.*', 'usos.description as use', 'areas.measure', 'areas.unit', 'locations.latitude_start', 'locations.latitude_end', 'locations.longitude_start', 'locations.longitude_end')
        ->get()->toArray();
    }

    public static function areaZonas($id_municipio)
    {
        
      $id_zonas= Zone::where('id_place',$id_municipio)->get(['id'])->toArray();
      $array= Zone::where('id_place',$id_municipio)->get(['id','name'])->toArray();

      for($i=0;$i<sizeof($id_zonas);$i++){
          $area = Area::where('id_zone', $id_zonas[$i])->get();
          if (!$area->isEmpty()) {
            $measure = (float) $area->toArray()[0]["measure"];
            $array[$i]=array_add($array[$i], 'area', $measure);
          }else{
            $array[$i]=array_add($array[$i], 'area', 0);
          }
      }
      return $array;
  }
}



