<?php

namespace Database\Seeders;

use App\Models\Seguro;
use Illuminate\Database\Seeder;

class SeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seguro::create([
            'coche_id' => '1',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
        Seguro::create([
            'coche_id' => '2',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
        Seguro::create([
            'coche_id' => '3',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
        Seguro::create([
            'coche_id' => '4',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
        Seguro::create([
            'coche_id' => '5',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
        Seguro::create([
            'coche_id' => '6',
            'aseguradora' => 'Plus Ultra',
            'npoliza' => '00000',
            'expira' => '2022-11-30',
            'estado' => 'Activo',
        ]);
    }
}
