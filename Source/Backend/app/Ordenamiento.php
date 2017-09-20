<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenamiento extends Model
{
    protected $fillable = [
        'departamento', 'municipio', 'ano','simbolo', 'cobertura', 'uso','area_hectareas', 'localizacion', 'codigo_dane',
    ];
}
