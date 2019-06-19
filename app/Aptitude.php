<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aptitude extends Model
{
	protected $fillable = ['Decision','etatSante','certificat_id'];
    
    public function certificat()
    {

    	return $this->belongsTo('App\certificat','certificat_id');
    }
}
