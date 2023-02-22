<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\catalogoPresupuestoInmueble;

class catalogoPresupuestoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = new catalogoPresupuestoInmueble(); $p1->rango = '$300,000 a $500,000'; $p1->save();
        $p2 = new catalogoPresupuestoInmueble(); $p2->rango = '$500,001 a $700,000'; $p2->save();
        $p3 = new catalogoPresupuestoInmueble(); $p3->rango = '$700,001 a $1,000,000'; $p3->save();
    }
}
