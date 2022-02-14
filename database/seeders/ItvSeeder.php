<?php

namespace Database\Seeders;

use App\Models\Itv;
use Illuminate\Database\Seeder;

class ItvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Itv::create([
            'coche_id' => '1',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
        Itv::create([
            'coche_id' => '2',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
        Itv::create([
            'coche_id' => '3',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
        Itv::create([
            'coche_id' => '4',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
        Itv::create([
            'coche_id' => '5',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
        Itv::create([
            'coche_id' => '6',
            'expira' => '2022-02-12',
            'estado' => 'Favorable',
            ]);
    }
}
