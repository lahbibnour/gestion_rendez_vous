<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function medecins()
    {
        return $this->belongsToMany('App\Medecin');
    }
    public function patients()
    {
        return $this->belongsToMany('App\Patient');
    }
    public function Rdv()
    {
        return $this->belongsTo('App\Rdv');
    }
     
}
