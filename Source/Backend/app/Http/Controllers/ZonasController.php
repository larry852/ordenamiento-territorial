<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zone;
use App\Place;

class ZonasController extends Controller
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
    public function detail($id)
    {
        $zone = Zone::detailZone($id);
        return response()->json($zone);

    }
    public function showText($id,$texto)
    {

        //
        $zones=Zone::searchDetailZones($texto, $id);
        $city = Place::find($id);
        $department = Place::find($city->pattern);
        array_push($zones, $city, $department);
        return response()->json($zones);


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zonas = Zone::consultazonas($id);
        $city = Place::find($id);
        $department = Place::find($city->pattern);
        array_push($zonas, $city, $department);
        return response()->json($zonas);       
        
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
