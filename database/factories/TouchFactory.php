<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Touch;
use Faker\Generator as Faker;

$factory->define(Touch::class, function (Faker $faker) {
    return [
                // 'contact_id'=>1,
                'name'=>$faker->firstNameMale,
                'email'=>$faker->email,
                'message'=>$faker->text($maxNbChars = 200),
                'created_at'=>$faker -> iso8601($max = 'now'),
                'updated_at'=>$faker -> iso8601($max = 'now'),
    ];
});
