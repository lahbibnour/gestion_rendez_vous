<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{

    protected $dates = [
        'dateRdv'
    ];
    public function Patient()
    {
        return $this->belongsTo('App\Patient');
    }
    public function Consultation()
    {
        return $this->hasOne('App\Consultation');
    }
    
}
