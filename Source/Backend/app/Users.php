<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    protected $fillable = [
        'username', 'first_name', 'last_name','email','password','avatar','avatar','gender','phone','institution','is_active','last_login','date_joined','if_staff',
    ];

    public static function consultausuarios()
    {
     $Usuarios = DB::table('users')->get();
       echo "<br>";
       return var_dump($Usuarios);
    	
        
    }

    public static function consultadetalleuser($id_usuario)
    {
    	return Users::where('id',$id_usuario)->get();
        
    }
}
