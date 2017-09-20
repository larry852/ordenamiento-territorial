<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call('AdministradorSeeder');
        $this->call('Usuario_autorizadoSeeder');
        $this->call('Usuario_anonimoSeeder');
    }
}
