<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->words($nb = 2, $asText = true);
    return [
        //
        'title' => $title,
        'description' => $faker->sentence,
        'category_type' => 'blog',
        'status' => 1
    ];
});

