<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   protected $guarded = array();
    public function medecin()
    {
       return $this->belongsToMany('App\Medecin');
    }

    public function secretaire()
    {
       return $this->belongsToMany('App\Secretaire');
    }
}
