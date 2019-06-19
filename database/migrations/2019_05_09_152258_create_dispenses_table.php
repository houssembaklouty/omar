<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateRepos');
             $table->integer('NbrJourRepos')->unsigned();

             $table->unsignedBigInteger('certificat_id');
             $table->foreign('certificat_id')
                    ->references('id')
                    ->on('certificats');

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
        Schema::dropIfExists('dispenses');
    }
}
