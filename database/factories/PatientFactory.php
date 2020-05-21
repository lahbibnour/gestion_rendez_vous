<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'age' => $faker->randomDigitNotNull,
        'num_tel' => $faker->e164PhoneNumber,
        'etat' => $faker->sentence,
        'sexe' => $faker->word,
        'ordannance'=> $faker->sentence,
        'certificat'=>$faker->sentence,
        'observation'=>$faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),






    ];
});
