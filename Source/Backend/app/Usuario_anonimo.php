<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuario_anonimo extends Model{

protected $table="usu_anoni";
protected $primarykey="id";
protected $fillable=array('nombre','edad','ciudad');


}