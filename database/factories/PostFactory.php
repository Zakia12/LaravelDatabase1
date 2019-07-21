<?php

//* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),

    ];
});
