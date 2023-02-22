<?php

namespace Database\Seeders;

use App\Models\catalogoSalarioRegistrado;
use Illuminate\Database\Seeder;

class salarioRegistradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sr = new catalogoSalarioRegistrado();
        $sr->rango = '0';
        $sr->puntaje = 111;
        $sr->save();
        
        $sr1 = new catalogoSalarioRegistrado();
        $sr1->rango = '7356';
        $sr1->puntaje = 111;
        $sr1->save();
        
        $sr2 = new catalogoSalarioRegistrado();
        $sr2->rango = '7357';
        $sr2->puntaje = 128;
        $sr2->save();
        
        $sr3 = new catalogoSalarioRegistrado();
        $sr3->rango = '11170';
        $sr3->puntaje = 128;
        $sr3->save();
        
        $sr4 = new catalogoSalarioRegistrado();
        $sr4->rango = '11171';
        $sr4->puntaje = 144;
        $sr4->save();
    }
}
