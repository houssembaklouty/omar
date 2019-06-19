<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispense extends Model
{
	 protected $fillable = ['dateRepos','NbrJourRepos','certificat_id'];

  public function certificat()
    {
    	return $this->belongsTo('App\certificat','dispense_id');

    }

}
