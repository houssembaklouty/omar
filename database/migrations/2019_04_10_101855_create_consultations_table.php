<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('diagMedic');
            $table->text('ExamComp');
            $table->text('ExamParac');
            $table->text('MotifCons');
            $table->text('Exam_Clin');
            $table->double('TarifCons');
            $table->dropColumn(['ExamParac']);

            $table->integer('patient_id')->index()->unsigned();
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
