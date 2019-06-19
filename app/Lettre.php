<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Patient;
class Lettre extends Model
{
    //
        protected $fillable = ['','','','','',''];

    public function patient()
         {
             return $this->belongsTo('App\Patient');
         }
}
