<?php

namespace Database\Seeders;

use App\Models\catalogoTiempoBimiestre;
use Illuminate\Database\Seeder;

class tiempoBimestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = new catalogoTiempoBimiestre();
        $b->rango = '0 a 2';
        $b->puntaje = 0;
        $b->save();
        
        $b1 = new catalogoTiempoBimiestre();
        $b1->rango = '3 a 8';
        $b1->puntaje = 90;
        $b1->save();
        
        $b2 = new catalogoTiempoBimiestre();
        $b2->rango = '9 a 17';
        $b2->puntaje = 123;
        $b2->save();
        
        $b3 = new catalogoTiempoBimiestre();
        $b3->rango = '18 a 29';
        $b3->puntaje = 149;
        $b3->save();

        $b3 = new catalogoTiempoBimiestre();
        $b3->rango = '30 o más';
        $b3->puntaje = 191;
        $b3->save();
    }
}
