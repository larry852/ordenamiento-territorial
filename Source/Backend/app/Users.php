<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'username', 'first_name', 'last_name','email','password','avatar','avatar','gender','phone','institution','is_active','last_login','date_joined','if_staff',
    ];

    public static function consultausuarios()
    {
    	return  DB::table('user')->get();
        
    }
}
