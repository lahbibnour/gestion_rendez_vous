<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consultation;
use App\Patient;
use App\Medecin;
use Faker\Generator as Faker;

$factory->define(Consultation::class, function (Faker $faker) {
    return [
        'patient_id' => Patient::get('id')->random(),
        'medecin_id' => Medecin::get('id')->random(),
        'date' => $faker->date,
        'duree' => $faker->time,
        'ordannance'=> $faker->sentence,
        'observation'=>$faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
