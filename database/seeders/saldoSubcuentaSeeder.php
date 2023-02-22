<?php

namespace Database\Seeders;

use App\Models\catalogoSaldoSubcuenta;
use Illuminate\Database\Seeder;

class saldoSubcuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new catalogoSaldoSubcuenta();
        $s->rango = '$0 a $9,999';
        $s->puntaje = 116;
        $s->save();
        
        $s1 = new catalogoSaldoSubcuenta();
        $s1->rango = '$10,000 a $24,999';
        $s1->puntaje = 119;
        $s1->save();
        
        $s2 = new catalogoSaldoSubcuenta();
        $s2->rango = '$25,000 a $49,000';
        $s2->puntaje = 122;
        $s2->save();
        
        $s2 = new catalogoSaldoSubcuenta();
        $s2->rango = '$50,000 o más';
        $s2->puntaje = 124;
        $s2->save();
    }
}
