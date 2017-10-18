<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Ordenamiento;
use App\Place;
use App\User;
use App\Uso;
use App\Zone;
use App\Area;
use App\Location;
use File;
use Storage;

class Ordenamientos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Inicializacion de Departamentos
        // $this->departamentos();

        // Inicializacion de Municipios
        // $this->municipios();

        // Inicializacion de usuario admin por defecto
        $this->userAdmin();

        // Test de endpoints
        $this->test();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Guardado de zona por formulario
        if ($request->zone_name != null){
            $zone = new Zone();
            $zone->name = strtolower($request->zone_name);
            $zone->description = strtolower($request->description);
            $zone->symbol = $request->symbol;
            $zone->last_modified = new \DateTime();
            $zone->id_place = 2; //Roncesvalles
            $zone->save();

            $uso = new Uso();
            $uso->description = strtolower($request->uso_description);
            $uso->id_zone = $zone->id;
            $uso->save();

            if ($request->latitude_start != null){
                $location = new Location();
                $location->latitude_start = $request->latitude_start;
                $location->latitude_end = $request->latitude_end;
                $location->longitude_start = $request->longitude_start;
                $location->longitude_end = $request->longitude_end;
                $location->description = strtolower($request->description);
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


        // Guardado de lugar por formulario
        if($request->place_name != null){

            $place = new Place();
            $place->name = strtolower($request->place_name);
            $place->dane = $request->dane;
            $place->flag = "https://ordenamiento-backend.herokuapp.com/flags/" .$request->dane. ".png";
            $place->pattern = $request->pattern;
            $place->save();
            echo "Places Guardados";

        }

        // Guardado de usuario por formulario
        if ($request->first_name != null) {

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->avatar = $request->avatar;
            $user->gender = $request->gender;
            $user->phone = $request->phone;
            $user->institution = $request->institution;
            $user->is_active = $request->is_active;
            $user->last_login = $request->last_login;
            $user->date_joined = new \DateTime();
            $user->is_staff = $request->is_staff;
            $user->save();
            echo "User guardado";
        }
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

    public function departamentos()
    {
        $json = File::get("departamentos.json"); 
        $data =json_decode($json, true);
        foreach ($data as $obj) { 
            $place = new Place();
            $place->name = strtolower($obj['Departamento']);
            $place->dane = $obj['Dane'];
            $place->flag = "https://ordenamiento-backend.herokuapp.com/flags/" .$obj['Dane']. ".png";
            $place->pattern = null;            
            $place->save();
        }

        echo "<br>";
        echo "Departamentos Guardados";
        echo "<br>";
    }

    public function municipios()
    {
        $json = File::get("places.json"); 
        $data =json_decode($json, true);
        foreach ($data as $obj) { 
            $place = new Place();
            $place->name = strtolower($obj['MUNICIPIO']);
            $dane = $obj["MUN_DANE"]
            $place->dane = $dane;
            $place->flag = "https://ordenamiento-backend.herokuapp.com/flags/" .$dane. ".png";
            $place->pattern = $obj['PATTERN'];            
            $place->save();
        }

        echo "<br>";
        echo "Municipios Guardados";
        echo "<br>";
    }

    public function userAdmin()
    {
        if (User::where("username", "admin")->get()->isEmpty()) {
            $admin = new User();
            $admin->username = "admin";
            $admin->first_name = "admin";
            $admin->last_name = "admin";
            $admin->email = "admin@admin.com";
            $admin->password = bcrypt("admin");
            $admin->is_active = true;
            $admin->date_joined = new \DateTime();
            $admin->is_staff = true;
            $admin->save();
            echo "<br>";
            echo "Admin creado";
            echo "<br>";
        }else{
            echo "<br>";
            echo "Admin existente";
            echo "<br>";
        }
    }


    public function test()
    {
        $Departamentos = Place::consultadepartamentos();
        echo "<h3> Departamentos: </h3>";
        echo "<pre>";
        print_r($Departamentos);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $Municipios = Place::consultamunicipios(1);
        echo "<h3> Municipios por departamento '1': </h3>";
        echo "<pre>";
        print_r($Municipios);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $zonas = Zone::consultazonas(2);
        echo "<h3> Detalles zonas por municipio '2': </h3>";
        echo "<pre>";
        print_r($zonas);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $zone = Zone::detailZone(1);
        echo "<h3> Detalle zona '1': </h3>";
        echo "<pre>";
        print_r($zone);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $users = User::consultausuarios();
        echo "<h3> Usuarios: </h3>";
        echo "<pre>";
        print_r($users);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $user = User::detailUser(1);
        echo "<h3> Detalle usuario '1': </h3>";
        echo "<pre>";
        print_r($users);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $searchNameDepartments = Place::searchNameDepartments("tol");
        echo "<h3> Busqueda por nombre 'tol' en departamentos: </h3>";
        echo "<pre>";
        print_r($searchNameDepartments);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $searchDaneDepartments = Place::searchDaneDepartments(73);
        echo "<h3> Busqueda por Dane '73' en departamentos: </h3>";
        echo "<pre>";
        print_r($searchDaneDepartments);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $searchNameCities = Place::searchNameCities("ron", 1);
        echo "<h3> Busqueda por nombre 'ron' en municipios, departamento '1': </h3>";
        echo "<pre>";
        print_r($searchNameCities);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $searchDaneCities = Place::searchDaneCities(622, 1);
        echo "<h3> Busqueda por Dane '622' en municipios, departamento '1': </h3>";
        echo "<pre>";
        print_r($searchDaneCities);
        echo "</pre>";
        echo "<br>";
        echo "<br>";

        $searchDetailZones = Zone::searchDetailZones("pr", 2);
        echo "<h3> Busqueda por texto 'pr' en zonas, municipio '2': </h3>";
        echo "<pre>";
        print_r($searchDetailZones);
        echo "</pre>";
        echo "<br>";
        echo "<br>";
    }

}
