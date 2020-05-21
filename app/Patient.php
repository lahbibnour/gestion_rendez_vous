<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function medecin()
    {
       return $this->belongsToMany('App\Medecin');
    }

    public function secretaire()
    {
       return $this->belongsToMany('App\Secretaire');
    }

    //ajouter le 19/05/2020

    public function Rdv()
    {
       return $this->hasMany('App\Rdv');
    }
}
