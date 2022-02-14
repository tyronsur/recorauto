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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Worker']);

        Permission::create(['name' => 'housekeeping.home'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'housekeeping.coches.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.coches.create'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.coches.edit'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.coches.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.itv.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.itv.create'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.itv.edit']);
        Permission::create(['name' => 'housekeeping.itv.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.citasitv.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.citasitv.create'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.citasitv.edit'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.citasitv.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.seguros.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.seguros.create'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.seguros.edit']);
        Permission::create(['name' => 'housekeeping.seguros.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.rutas.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.rutas.create'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.rutas.edit'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.rutas.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.mantenimientos.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.mantenimientos.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.mantenimientos.edit'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.mantenimientos.destroy'])->assignRole($role1);

        Permission::create(['name' => 'housekeeping.cambiosdeaceite.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.cambiosdeaceite.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'housekeeping.cambiosdeaceite.edit'])->assignRole($role1);
        Permission::create(['name' => 'housekeeping.cambiosdeaceite.destroy'])->assignRole($role1);



    }
}
