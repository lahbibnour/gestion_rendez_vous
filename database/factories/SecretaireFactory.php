<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Secretaire;
use Faker\Generator as Faker;

$factory->define(Secretaire::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'email' => $faker->safeEmail,
        'mdp' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
