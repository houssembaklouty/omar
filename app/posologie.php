<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posologie extends Model
{
	protected $fillable = [
	    'nbrDose', 'DureeTotal', 'nbr_jour','nomMedic','commentaire', 'ordonance_id'
	];

}
