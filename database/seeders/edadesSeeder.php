<?php

namespace Database\Seeders;

use App\Models\catalogoEdad;
use Illuminate\Database\Seeder;

class edadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new catalogoEdad();
        $e->rango = '18';
        $e->puntaje = 105;
        $e->save();
        
        $e1 = new catalogoEdad();
        $e1->rango = '23';
        $e1->puntaje = 105;
        $e1->save();
        
        $e2 = new catalogoEdad();
        $e2->rango = '24';
        $e2->puntaje = 118;
        $e2->save();

        $e3 = new catalogoEdad();
        $e3->rango = '29';
        $e3->puntaje = 118;
        $e3->save();
        
        $e4 = new catalogoEdad();
        $e4->rango = '30';
        $e4->puntaje = 124;
        $e4->save();
        
        $e5 = new catalogoEdad();
        $e5->rango = '39';
        $e5->puntaje = 124;
        $e5->save();

        $e6 = new catalogoEdad();
        $e6->rango = '40';
        $e6->puntaje = 128;
        $e6->save();

        $e7 = new catalogoEdad();
        $e7->rango = '55';
        $e7->puntaje = 128;
        $e7->save();

        $e8 = new catalogoEdad();
        $e8->rango = '56';
        $e8->puntaje = 114;
        $e8->save();
    }
}
