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
    	return Zone::where('id_place',$id_municipio)->get();
        
    }

    public static function consultadetalleszona($id_zone)
    {
    	//return Zone::where('id_place',$id_municipio)->get();


    	return DB::table('Zone')
            ->join('Uso', 'Zone.id', '=', 'Uso.id')
            ->join('Location', 'Zone.id', '=', 'Location.id')
            ->select('Zone.id', 'Uso.description', 'Location.latitude_start')
            ->get();
        
    }
}



