<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Ruben Amoretti Cubas",
            'email' => "rb.amoretti@gmail.com",
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        
        User::create([
            'name' => "Julio Salazar Hernandez",
            'email' => "julio.salazar@gmail.com",
            'password' => bcrypt('123456')
        ]);

        User::factory(3)->create();
    }
}
