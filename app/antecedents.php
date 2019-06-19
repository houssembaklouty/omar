<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedents extends Model
{
     public function patient()
    {
        return $this->belongsTo('App\patient');
    }
}
