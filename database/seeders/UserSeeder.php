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
            'name' => 'TyronSur Services',
            'email' => 'emilio@tyronsur.es',
            'password' => bcrypt('DrK01997*')
        ])->assignRole('Admin');

    }
}
