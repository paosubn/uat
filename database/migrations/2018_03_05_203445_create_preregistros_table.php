<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreregistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preregistro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDireccion')->unsigned();
            $table->boolean('esEmpresa')->default(false);
            $table->string('nombre', 200);
            $table->string('primerAp', 50)->nullable();
            $table->string('segundoAp', 50)->nullable();
            $table->string('rfc',20);
            $table->date('fechaNac')->nullable();
            $table->string('sexo',20)->default('SIN INFORMACION');
            $table->string('curp',20)->nullable();
            $table->string('telefono',15);
            $table->string('docIdentificacion',50)->nullable();
            $table->string('numDocIdentificacion',50)->nullable();
            $table->boolean('conViolencia')->default(false);
            $table->string('narracion', 2000);
            $table->string('folio',15);
            $table->string('representanteLegal',100)->default("SIN INFORMACION");
            $table->boolean('statusCancelacion')->default(false);
            $table->boolean('statusOrigen')->default(false);
            $table->boolean('statusCola')->nullable();
            $table->foreign('idDireccion')->references('id')->on('domicilio')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preregistro');
    }
}
