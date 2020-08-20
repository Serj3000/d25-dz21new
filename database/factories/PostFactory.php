<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,2), //numberBetween($min = 1000, $max = 9000) // 8567
        'category_id' => rand(1,9),
        'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'image' => rand(1,9),
        'preview_text' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
        'body' => $faker -> text($maxNbChars = 800),
        'created_at' => $faker -> iso8601($max = 'now'),
        'updated_at' => $faker -> iso8601($max = 'now'),
    ];
});
