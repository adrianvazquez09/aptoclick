<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoCostoAnualTotalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_costo_anual_total', function (Blueprint $table) {
            $table->id();
            $table->float('sUMA');
            $table->float('sPesos');
            $table->float('tInteres');
            $table->float('mMaximoPesos');
            $table->float('pHipoteca');
            $table->float('pHipotecaVerde');
            $table->float('cAdministracion');
            $table->float('sDesempleo');
            $table->float('sDanios');
            $table->float('pMensualTotal');
            $table->float('aPatronal');
            $table->float('cat');
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
        Schema::dropIfExists('catalogo_costo_anual_total');
    }
}
