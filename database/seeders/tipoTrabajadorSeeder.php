<?php

namespace Database\Seeders;

use App\Models\catalogoTipoTrabajador;
use Illuminate\Database\Seeder;

class tipoTrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = new catalogoTipoTrabajador();
        $t->descripcion = 'Permanente o de planta';
        $t->puntaje = 123;
        $t->save();
        
        $t1 = new catalogoTipoTrabajador();
        $t1->descripcion = 'Eventual o por tiempo determinado';
        $t1->puntaje = 103;
        $t1->save();
    }
}
