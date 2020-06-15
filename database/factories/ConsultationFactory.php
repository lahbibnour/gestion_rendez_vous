<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consultation;
use App\Patient;
use App\Rdv;
use Faker\Generator as Faker;

$factory->define(Consultation::class, function (Faker $faker) {
    return [
        'patient_id' => Patient::get('id')->random(),
        'rdv_id' => Rdv::get('id')->random(),
        'date' => $faker->date,
        'duree' => $faker->time,
        'ordannance'=> $faker->sentence,
        'observation'=>$faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
