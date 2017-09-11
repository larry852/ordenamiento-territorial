<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuario_anonimo;
use Faker\Factory as Faker;


class Usuario_anonimoSeeder extends Seeder{

public function run(){

$faker=Faker::create();
for($i=0; $i<3; $i++){

Usuario_anonimo::create(
['nombre'=>$faker->word(),
  'edad'=>$faker->numberBetween(18,50),
  'ciudad'=>$faker->word()
]

	);

}

}
}