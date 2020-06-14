<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rdv;
use App\Patient;
use App\Secretaire;
use Faker\Generator as Faker;

$factory->define(Rdv::class, function (Faker $faker) {
    return [
        'patient_id' => Patient::get('id')->random(),
        
        'dateRdv'=> $faker->date,
        'heure' => $faker->time,
        'created_at' => now(),
        'updated_at' => now(),



    ];
});
