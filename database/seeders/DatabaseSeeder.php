<?php

namespace Database\Seeders;

use App\Models\Collision;
use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('imagenes');
        Storage::makeDirectory('imagenes');
        
        $this->call(RoleSeeder::class);
        
        $this->call(UserSeeder::class);
        
        Enterprise::factory(5)->create();
        // $this->call(EnterpriseSeeder::class);

        Employee::factory(10)->create();

        $this->call(DeviceSeeder::class);
        // Device::factory(10)->create();
        
        
        
        Collision::factory(100)->create();
                
    }
}
