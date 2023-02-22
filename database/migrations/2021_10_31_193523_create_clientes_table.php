<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('nombres');
            $table->string('primerApellido')->nullable(true);
            $table->string('segundoApellido')->nullable(true);
            $table->string('fechaNacimiento')->nullable(true);
            $table->string('curp')->nullable(true);
            $table->string('rfc')->nullable(true);
            $table->string('nss')->nullable(true);
            $table->string('doc_curp')->nullable(true)->default('default.jpg');
            $table->string('doc_rfc')->nullable(true)->default('default.jpg');
            $table->string('doc_nss')->nullable(true)->default('default.jpg');
            $table->string('telefono')->nullable(true);
            $table->integer('telefonoVerificado')->nullable(true);
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
        Schema::dropIfExists('clientes');
    }
}
