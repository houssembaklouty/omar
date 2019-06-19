<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posologies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('nbrDose');
            $table->double('DureeTotal');
            $table->double('nbr_jour');
            $table->String('nomMedic');
            $table->String('commentaire');
            $table->integer('ordonance_id')->index()->unsigned();
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
        Schema::dropIfExists('posologies');
    }
}
