<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{ 

	protected $fillable = ['start_date','end_date'];
    public function patient()
    {
        return $this->belongsTo('App\patient');
    }
}
