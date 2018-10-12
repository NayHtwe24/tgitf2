<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => implode("<br>", $faker->paragraphs(7)),
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
