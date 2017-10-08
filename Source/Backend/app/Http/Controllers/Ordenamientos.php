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
        // // Inicializacion de Departamento y municipio
        // if (Place::where("name", "Tolima")->get()->isEmpty()) {
        //     $department = new Place();
        //     $department->name = "Tolima";
        //     $department->dane = 73;
        //     $department->flag = "https://ordenamiento-backend.herokuapp.com/flags/73.png";
        //     $department->pattern = null;
        //     $department->save();
        //     echo "Departamento creado";
        //     echo "<br>";
        // }else{
        //     echo "Departamento existente";
        //     echo "<br>";
        // }

        // if (Place::where("name", "Roncesvalles")->get()->isEmpty()) {
        //     $city = new Place();
        //     $city->name = "Roncesvalles";
        //     $city->dane = 622;
        //     $city->flag = "https://ordenamiento-backend.herokuapp.com/flags/622.png";
        //     $city->pattern = 1; //Tolima
        //     $city->save();
        //     echo "Municipio creado";
        //     echo "<br>";
        // }else{
        //     echo "Municipio existente";
        //     echo "<br>";
        // }

        $Departamentos = Place::consultadepartamentos();
        echo "<h3> Departamentos: </h3>";
        echo "<pre>";
        print_r($Departamentos);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $Municipios = Place::consultamunicipios(1);
        echo "<h3> Municipios por Departamento 1: </h3>";
        echo "<pre>";
        print_r($Municipios);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $zonas = Zone::consultazonas(2);
        echo "<h3> Detalles Zonas por municipio 2: </h3>";
        echo "<pre>";
        print_r($zonas);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $zone = Zone::detailZone(5);
        echo "<h3> Detalle Zona 5: </h3>";
        echo "<pre>";
        print_r($zone);
        echo "</pre>";
        echo "<br>";
        echo "<br>";
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
        $zone = new Zone();
        $zone->name = $request->zone_name;
        $zone->description = $request->description;
        $zone->symbol = $request->symbol;
        $zone->last_modified = new \DateTime();
        $zone->id_place = 2; //Roncesvalles
        $zone->save();

        $uso = new Uso();
        $uso->description = $request->uso_description;
        $uso->id_zone = $zone->id;
        $uso->save();

        if (!$request->latitude_start === null){
            $location = new Location();
            $location->latitude_start = $request->latitude_start;
            $location->latitude_end = $request->latitude_end;
            $location->longitude_start = $request->longitude_start;
            $location->longitude_end = $request->longitude_end;
            $location->description = $request->description;
            $location->id_zone = $zone->id;
            $location->save();
        }

        $area = new Area();
        $area->measure = $request->measure;
        $area->unit = $request->unit;
        $area->id_zone = $zone->id;
        $area->save();

        echo "Zona guardada";
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
