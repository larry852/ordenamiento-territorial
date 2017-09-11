<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuario_autorizado extends Model{

protected $table="usu_auto";
protected $primarykey="id";
protected $fillable=array('nombre');


}