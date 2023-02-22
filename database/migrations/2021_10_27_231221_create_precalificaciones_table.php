<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrecalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precalificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('id_usuario')->nullable(true);
            $table->string('tokenPrecalificacion')->nullable(true);
            $table->integer('id_sepomex')->nullable(true);
            $table->integer('id_tiempoBimestre')->nullable(true);
            $table->integer('salarioRegistrado')->nullable(true);
            $table->integer('id_saldoSubcuenta')->nullable(true);
            $table->integer('id_tipoTrabajador')->nullable(true);
            $table->string('fechaNacimiento')->nullable(true);
            $table->integer('edad')->nullable(true);
            $table->integer('id_edadMin')->nullable(true);
            $table->integer('id_edadMax')->nullable(true);
            $table->integer('id_salarioRegistradoMin')->nullable(true);
            $table->integer('id_salarioRegistradoMax')->nullable(true);
            $table->integer('puntajeEdad')->nullable(true);
            $table->integer('puntajeTiempoBimestre')->nullable(true);
            $table->integer('puntajeSalarioRegistrado')->nullable(true);
            $table->integer('puntajeSaldoSubcuenta')->nullable(true);
            $table->integer('puntajeTipoTrabajador')->nullable(true);
            $table->integer('puntajeTotal')->nullable(true);
            $table->integer('precalStatus')->nullable(true);
            $table->integer('id_presupuestoInmueble')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precalificaciones');
    }
}
