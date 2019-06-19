<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonance extends Model
{
    //// Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
    //methode 
    protected $fillable = ['patient_id','consultation_id'];
     public function consultation()
     {
         return $this->belongsTo('App\Consultation');
     }
     public function medicament()
     {
         return $this->belongsToMany('App\Medicament')
         ->withPivot('QuantiteMedic', 'nbrFoisMedic','formMedic')
        ->withTimestamps();
        ;
     }
    
}
