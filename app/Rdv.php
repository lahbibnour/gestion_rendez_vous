<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //
    public function patient()
{
    return $this->belongsTo('App\Rdv');
}
}
