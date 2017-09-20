<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       echo ('1. Amazonas: Leticia<br>
2. Antioquia: Medellín<br>
3. Arauca: Arauca<br>
4. Atlántico: Barranquilla<br>
5. Bolívar: Cartagena<br>
6. Boyacá: Tunja<br>
7. Caldas: Manizales<br>
8. Caquetá: Florencia<br>
9. Casanare: Yopal<br>
10. Cauca: Popayán<br>
11. Cesar: Valledupar<br>
12. Chocó: Quibdó<br>
13. Córdoba: Montería<br>
14. Cundinamarca: Bogotá<br>
15. Guainía: Puerto Inírida<br>
16. Guaviare: San José del Guaviare<br>
17. Huila: Neiva<br>
18. La Guajira: Riohacha<br>
19. Magdalena: Santa Marta<br>
20. Meta: Villavicencio<br>
21. Nariño: Pasto<br>
22. Norte de Santander: Cúcuta<br>
23. Putumayo: Mocoa<br>
24. Quindio: Armenia<br>
25. Risaralda: Pereira<br>
26. San Andres y Providencia: San Andres<br>
27. Santander: Bucaramanga<br>
28. Sucre: Sincelejo<br>
29. Tolima: Ibagué<br>
30. Valle del Cauca: Cali<br>
31. Vaupés: Mitú<br>
32. Vichada: Puerto Carreño<br>');
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
