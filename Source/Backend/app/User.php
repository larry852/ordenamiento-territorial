<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'first_name', 'last_name','email','password','avatar','avatar','gender','phone','institution','is_active','last_login','date_joined','if_staff',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function consultausuarios()
    {
    	return  User::all()->toArray();        
    }

    public static function detailUser($id)
    {
    	return  User::where('id',$id)->get()->toArray();        
    }
}
