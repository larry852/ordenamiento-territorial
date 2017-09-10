<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Administrador;
use Faker\Factory as Faker;


class AdministradorSeeder extends Seeder{

public function run(){

$faker=Faker::create();
for($i=0; $i<3; $i++){

Administrador::create(
['nombre'=>$faker->word(),
'contraseña'=>$faker->randomNumber(6)]

	);

}

}





}