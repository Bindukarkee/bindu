<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    $title = $faker->words($nb = 2, $asText = true);
    return [
        //
        'title' => $title,
        'description' => $faker->sentence,
        'status' => 1
    ];
});
