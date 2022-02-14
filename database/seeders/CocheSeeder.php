<?php

namespace Database\Seeders;

use App\Models\Coche;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coche::create([
            'matricula' => '3717LTG',
            'modelo' => 'Opel Vivaro',
            'logo' => 'https://i.pinimg.com/originals/6b/fb/8d/6bfb8d15e3c1d9b774ec0bee7ea44552.jpg',
            'combustion' => 'Diesel',
            'anticongelante' => '30% Verde',
            'aceite' => '5W30',
        ]);
        Coche::create([
            'matricula' => '2353CBC',
            'modelo' => 'Berlingo',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/f/f3/Citro%C3%ABn_Logo.svg',
            'combustion' => 'Diesel',
            'anticongelante' => '30% Verde',
            'aceite' => '10W40',    
        ]);
        Coche::create([
            'matricula' => 'M5301UF',
            'modelo' => 'VW Golf',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Volkswagen_Logo_till_1995.svg/1200px-Volkswagen_Logo_till_1995.svg.png',
            'combustion' => 'Diesel',
            'anticongelante' => '50% Rosa',
            'aceite' => '5W30',    
        ]);
        Coche::create([
            'matricula' => '8462HRR',
            'modelo' => 'VW Caddy',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Volkswagen_Logo_till_1995.svg/1200px-Volkswagen_Logo_till_1995.svg.png',
            'combustion' => 'Diesel',
            'anticongelante' => '50% Rosa',
            'aceite' => '5W30',    
        ]);
        Coche::create([
            'matricula' => '2712JNY',
            'modelo' => 'VW Caddy',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Volkswagen_Logo_till_1995.svg/1200px-Volkswagen_Logo_till_1995.svg.png',
            'combustion' => 'Diesel',
            'anticongelante' => '50% Rosa',
            'aceite' => '5W30',    
        ]);
        Coche::create([
            'matricula' => '1872KRK',
            'modelo' => 'VW Caddy',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Volkswagen_Logo_till_1995.svg/1200px-Volkswagen_Logo_till_1995.svg.png',
            'combustion' => 'Diesel',
            'anticongelante' => '50% Rosa',
            'aceite' => '5W30',    
        ]);
    }
}
