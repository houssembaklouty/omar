<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificat extends Model
{
    protected $fillable = ['patient_id', 'commentaire', 'type'];

    public function dispense()
    {
    	return $this->hasMany('App\Dispense');
    }

 public function patient()
    {
        return $this->belongsTo('App\patient');
    }

    public function habilitation()
    {
        return $this->hasMany('App\Habilitation');
    }
     public function aptitude()
    {
        return $this->hasMany('App\aptitude');
    }
}
