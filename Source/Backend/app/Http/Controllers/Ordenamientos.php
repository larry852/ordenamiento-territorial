<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Ordenamiento;
use App\Place;
use App\Users;
use App\Uso;
use App\Zone;
use App\Area;
use App\Location;

class Ordenamientos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place();
        $place->name = $request->place_name;
        $place->dane = $request->dane;
        $place->flag = $request->flag;
        $place->pattern = $request->pattern;
        $place->save();
        
        $zone = new Zone();
        $zone->name = $request->zone_name;
        $zone->description = $request->description;
        $zone->symbol = $request->symbol;
        $zone->last_modified = new \DateTime();
        $zone->id_place = $place->id;
        $zone->save();

        $uso = new Uso();
        $uso->description = $request->uso_description;
        $uso->id_zone = $zone->id;
        $uso->save();

        if (!($request->latitude_start === null)){
            $location = new Location();
            $location->latitude_start = $request->latitude_start;
            $location->latitude_end = $request->latitude_end;
            $location->longitude_start = $request->longitude_start;
            $location->longitude_end = $request->longitude_end;
            $location->description = $request->description;
            $location->id_zone = $zone->id;
            $location->save();
        };

        $area = new Area();
        $area->measure = (int) $request->measure;
        $area->unit = $request->unit;
        $area->id_zone = $zone->id;
        $area->save();

        dd('Datos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
