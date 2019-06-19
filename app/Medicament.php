<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    //
      public function ordonance()
     {
         return $this->belongsToMany('App\ordonance');
     }
}
