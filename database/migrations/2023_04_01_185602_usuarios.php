<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('curp');
            $table->string('nombre');
            $table->string('priApe');
            $table->string('segApe');
            $table->date('fecNac');
            $table->integer('edad');
            $table->string('entNac');
            $table->string('sexo');
            $table->bigInteger('telCon1');
            $table->bigInteger('telCon2');
            $table->string('email');
            $table->string('calle');
            $table->integer('numExt');
            $table->string('numInt');
            $table->string('entFed');
            $table->integer('codPos');
            $table->string('munic');
            $table->string('colonia');
            $table->string('folio');
            $table->datetime('fecCit');
            $table->string('pNombre');
            $table->string('pPriApe');
            $table->string('pSegApe');

            $table->bigInteger('camp_id')->unsigned();

            $table->foreign('camp_id')->references('id')->on('campanas');


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
        //
    }
};
