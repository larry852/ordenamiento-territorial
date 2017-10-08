<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'first_name', 'last_name','email','password','avatar','avatar','gender','phone','institution','is_active','last_login','date_joined','if_staff',
    ];

    protected $hidden = array('password');

    public static function consultausuarios()
    {
    	return  User::all()->toArray();        
    }

    public static function detailUser($id)
    {
    	return  User::where('id',$id)->get()->toArray();        
    }
}
