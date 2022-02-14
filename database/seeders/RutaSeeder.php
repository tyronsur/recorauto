<?php

namespace Database\Seeders;

use App\Models\Ruta;
use App\Models\RutasHasUser;
use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruta::create([
            'name' => 'Mancha Real',
        ]);
        Ruta::create([
            'name' => 'Ruta 1',
        ]);
        RutasHasUser::create([
            'ruta_id' => '1',
            'user_id' => '1',
        ]);
    }
}
