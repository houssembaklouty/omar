<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    // Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;

         protected $fillable = ['diagMedic','ExamComp','Exam_Clin','MotifCons','id_patient','TarifCons'];

         public function patient()
         {
             return $this->belongsTo('App\patient', 'id_patient');
         }
}
