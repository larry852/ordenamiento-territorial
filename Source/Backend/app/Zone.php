<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
            ->get();
        
    }
}



