<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    public function patient()
    {
       return $this->belongsToMany('App\Patient');
    }

   
}
