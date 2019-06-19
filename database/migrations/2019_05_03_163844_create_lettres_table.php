<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLettresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lettres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('etatSant');
            $table->String('nomConf');
            $table->String('prenomConf');
            $table->String('SpecConf');
            $table->integer('patient_id');
           
           
           
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
        Schema::dropIfExists('lettres');
    }
}
