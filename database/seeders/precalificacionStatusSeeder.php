<?php

namespace Database\Seeders;

use App\Models\catalogoPrecalificacionStatus;
use Illuminate\Database\Seeder;

class precalificacionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new catalogoPrecalificacionStatus();
        $p->descripcion = 'activo';
        $p->save();
        
        $p = new catalogoPrecalificacionStatus();
        $p->descripcion = 'terminado';
        $p->save();
    }
}
