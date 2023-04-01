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
        Schema::create('campanas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('edades');
            $table->string('dosis');
            $table->string('marca');
            $table->string('dateDosis');
            $table->string('modulo');
            $table->string('domicilio');
            $table->string('municipio');
            $table->longblob('imagen');

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
