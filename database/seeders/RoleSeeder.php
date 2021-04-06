<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'admin.users',
                            'description' => 'Ver los usuarios'])->assignRole($role1);
        Permission::create(['name' => 'admin.roles',
                            'description' => 'Ver los roles'])->assignRole($role1);
        Permission::create(['name' => 'admin.enterprises',
                            'description' => 'Ver las empresas'])->assignRole($role1);
        Permission::create(['name' => 'admin.employees',
                            'description' => 'Ver los empleados'])->assignRole($role1);
        Permission::create(['name' => 'admin.devices',
                            'description' => 'Ver los dispositivos'])->assignRole($role1);
    }
}
