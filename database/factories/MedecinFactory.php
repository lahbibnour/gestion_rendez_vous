<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medecin;
use Faker\Generator as Faker;

$factory->define(Medecin::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'adresse' => $faker->sentence,
        'mdp' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'updated_at' => now(),
        

    ];
});
