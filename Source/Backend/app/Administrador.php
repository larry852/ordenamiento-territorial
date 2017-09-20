<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Administrador extends Model{

protected $table="administrador";
protected $primarykey="id";
protected $fillable=array('nombre','contraseña');


}