<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuario_autorizado;
use Faker\Factory as Faker;


class Usuario_autorizadoSeeder extends Seeder{

public function run(){

$faker=Faker::create();
for($i=0; $i<3; $i++){

Usuario_autorizado::create(
['nombre'=>$faker->word()]);

}

}
}