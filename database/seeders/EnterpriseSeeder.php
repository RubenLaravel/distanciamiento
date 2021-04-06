<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::create([
            'name' => "Coca Cola S.A",
            'ruc' => "20501439025",
            'imagen' => "vfrvsvstgtgtsgtgtf",
            'user_id' => 5
        ]);
        
        Enterprise::create([
            'name' => "Paraiso S.A",
            'ruc' => "20501439022",
            'imagen' => "vfrvsvstgtgtsgtgtf",
            'user_id' => 2
        ]);

        Enterprise::create([
            'name' => "Donofrio S.A",
            'ruc' => "20501439023",
            'imagen' => "vfrvsvstgtgtsgtgtf",
            'user_id' => 3
        ]);

        Enterprise::create([
            'name' => "Obras de Ingenieria S.A",
            'ruc' => "20501439021",
            'imagen' => "vfrvsvstgtgtsgtgtf",
            'user_id' => 1
        ]);

        Enterprise::create([
            'name' => "Decorosable Proteinas del Peru S.A",
            'ruc' => "20501439024",
            'imagen' => "vfrvsvstgtgtsgtgtf",
            'user_id' => 4
        ]);
    }
}
