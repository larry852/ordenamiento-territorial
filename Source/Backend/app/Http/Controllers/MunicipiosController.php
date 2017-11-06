<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;

class MunicipiosController extends Controller
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
        if(is_numeric($id)&&$id>0){
            $municipios = Place::consultamunicipios($id);

            if($municipios!=null){
                $department = Place::find($id);
                array_push($municipios, $department);
                return response()->json($municipios);
            }
            else{
                return response()->view('errors.validacionId');
            }
        }
        else{
            return response()->view('errors.validacionNumber');

        }

    
    }

    public function showname($id_departamento,$name)
    {
        if(is_numeric($id_departamento)&&$id_departamento>0){
            $municipios=Place::searchNameCities($name,$id_departamento);

            if($municipios!=null){
                $department = Place::find($id_departamento);
                array_push($municipios, $department);
                return response()->json($municipios);
            }
            else{
                return response()->view('errors.validacionId');
            }
        }
        else{
            return response()->view('errors.validacionNumber');

        }
    }

    public function showdane($id_departamento,$dane)
    {
       if(is_numeric($id_departamento)&&$id_departamento>0){
            if(is_numeric($dane)&&$dane>0){
                $municipios=Place::searchDaneCities($dane,$id_departamento);

                if($municipios!=null){
                    $department = Place::find($id_departamento);
                    array_push($municipios, $department);
                    return response()->json($municipios);
                }
                else{
                    return response()->view('errors.validacionId');
                }
            }
            else{
                return response()->view('errors.validacionDane');
            }    
        }
        else{
            return response()->view('errors.validacionNumber');

        }
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
