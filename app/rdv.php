<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rdv extends Model
{
    protected $fillable=[ 'etat','date' ,'motif'];
}
