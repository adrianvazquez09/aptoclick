<?php

namespace Database\Seeders;

use App\Models\catalogoSepomex;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(edadesSeeder::class);
        $this->call(salarioRegistradoSeeder::class);
        $this->call(tiempoBimestreSeeder::class);
        $this->call(saldoSubcuentaSeeder::class);
        $this->call(tipoTrabajadorSeeder::class);
        $this->call(precalificacionStatusSeeder::class);
        $this->call(prestamosInfonavitSeeder::class);
        $this->call(catalogoPresupuestoInmuebleSeeder::class);
    }
}