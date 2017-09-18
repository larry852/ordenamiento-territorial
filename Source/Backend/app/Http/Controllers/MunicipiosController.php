<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if($id==1){
         echo('<h2>AMAZONAS</h2>
            1.Leticia<br>
               2.Puerto Nariño');
        }
        else if($id==2){
         echo('<h2>ANTIOQUIA</h2>
3.Alejandría<br>
4.Amagá<br>
5.Amalfi<br>
6.Andes<br>
7.Angelópolis<br>
8.Angostura<br>
9.Anorí<br>
10.Anzá<br>
11.Apartadó<br>
12.Arboletes<br>
13.Argelia<br>
14.Armenia<br>
15.Barbosa<br>
16.Bello<br>
17.Belmira<br>
18.Betania<br>
19.Betulia<br>
20.Briceño<br>
21.Buriticá<br>
22.Cáceres<br>
23.Caicedo<br>
24.Caldas<br>
25.Campamento<br>
26.Cañasgordas<br>
27.Caracolí<br>
28.Caramanta<br>
29.Carepa<br>
30.Carolina del Príncipe<br>
31.Caucasia<br>
32.Chigorodó<br>
33.Cisneros<br>
34.Ciudad Bolívar<br>
35.Cocorná<br>
36.Concepción<br>
37.Concordia<br>
38.Copacabana<br>
39.Dabeiba<br>
40.Donmatías<br>
41.Ebéjico<br>
42.El Bagre<br>
43.El Carmen de Viboral<br>
44.El Peñol<br>
45.El Retiro<br>
46.El Santuario<br>
47.Entrerríos<br>
48.Envigado<br>
49.Fredonia<br>
50.Frontino<br>
51.Giraldo<br>
52.Medellín<br>

');


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
