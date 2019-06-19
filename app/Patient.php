<?php

namespace App;

use App\Notifications\Patient\Auth\ResetPassword;
use App\Notifications\Patient\Auth\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password','prenom','adressePatient','cin','dateNais','sexe','Tel','ville','profession',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
public function certificat()
{
 
    return $this->hasMany('App\certificat');
}
public function consultation()
     {
         return $this->hasMany('App\Consultation');
     }
      public function ordonance()
     {
         return $this->hasMany('App\Ordonance');
     }
      
      public function antecedents()
     {
         return $this->hasMany('App\antecedents');
     }
     public function lettres()
     {
         return $this->hasMany('App\Lettre');
     }
      public function event()
    {
        return $this->belongsTo('App\event');
    }
}
