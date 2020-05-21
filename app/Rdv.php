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
}
