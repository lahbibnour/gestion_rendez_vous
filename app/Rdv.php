<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Rdv extends Model
{

    protected $dates = ['dateRdv' , ];

    public function setHeureAttribute($value)
    {
        $this->attributes['heure'] = Carbon::parse($value)->format('H:i');
    }

    public function Patient()
    {
        return $this->belongsTo('App\Patient');
    }
    public function Consultation()
    {
        return $this->hasOne('App\Consultation');
    }
    
}
