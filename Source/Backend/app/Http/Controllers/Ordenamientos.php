<?php

namespace POT\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Ordenamiento;
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
        /*$this->validate($request, [
            'departamento' => '$required',
            'municipio' => '$required',
            'año' => '$required',
            'simbolo' => '$required',
            'cobertura' => '$required',
            'uso' => '$required',
            'area_hectareas' => '$required',
            'localizacion' => '$required',
            'codigo_dane' => '$required'
            ]);

            $ordenamiento = new Ordenamiento();
            $ordenamiento->departamento = $request->departamento;
            $ordenamiento->municipio = $request->municipio;
            $ordenamiento->año = $request->año;
            $ordenamiento->simbolo = $request->simbolo;
            $ordenamiento->cobertura = $request->cobertura;
            $ordenamiento->uso = $request->uso;
            $ordenamiento->area_hectareas = $request->area_hectareas;
            $ordenamiento->localizacion = $request->localizacion;
            $ordenamiento->codigo_dane = $request->codigo_dane;*/

            $ordenamiento = new Ordenamiento();
            $ordenamiento->departamento = $request->departamento;
            $ordenamiento->municipio = $request->municipio;
            $ordenamiento->ano = $request->ano;
            $ordenamiento->simbolo = $request->simbolo;
            $ordenamiento->cobertura = $request->cobertura;
            $ordenamiento->uso = $request->uso;
            $ordenamiento->area_hectareas = $request->area_hectareas;
            $ordenamiento->localizacion = $request->localizacion;
            $ordenamiento->codigo_dane = $request->codigo_dane;

            $ordenamiento->save();
            dd('Datos guardados');
            dd($request->departamento);
            dd($request);
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
