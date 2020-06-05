<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'age' => $faker->randomDigitNotNull,
        'num_tel' => $faker->randomDigitNotNull,
        'email' => $faker->unique()->safeEmail,
        'etat' => $faker->word,
        'sexe' => $faker->word,
        'created_at' => now(),
        'updated_at' => now(),






    ];
});
