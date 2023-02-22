<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('numero_relacion');
            $table->string('tipo_activo');
            $table->string('estado');
            $table->string('municipio');
            $table->string('cp');
            $table->string('colonia');
            $table->string('direccion');
            $table->integer('recamaras');
            $table->integer('baths');
            $table->string('estacionamiento');
            $table->float('precio_sugerido');
            $table->float('avaluo_original');
            $table->float('m2_terreno');
            $table->float('m2_construccion');
            $table->string('tipo_vivienda');
            $table->string('lat');
            $table->string('lng');
            $table->string('posesion');
            $table->string('estatus_legal');
            $table->string('estatus_comercial');
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
        Schema::dropIfExists('inmuebles');
    }
}
