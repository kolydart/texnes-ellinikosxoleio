<?php

$factory->define(App\ContentTag::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->sentence,
        "slug" => $faker->word,
    ];
});
