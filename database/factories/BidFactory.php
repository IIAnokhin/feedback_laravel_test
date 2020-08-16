<?php

use Faker\Generator as Faker;

$factory->define(App\Bid::class, function (Faker $faker) {
    $title = $faker->realText(rand(10, 30));
    $created = $faker->dateTimeBetween('-10days', '-1days');
    return [
        'title' => $title,
        'text' => $faker->realText(rand(100, 300)),
        'user_id' => rand(1,4),
        'clscreated_at' => $created,
        'updated_at' => $created,
    ];
});
