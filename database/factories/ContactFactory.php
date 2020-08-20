<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
            'contact_heading'=>'INFORMATION',
            'touch_heading'=>'GET IN TOUCH',
            'adress'=>$faker->address ,
            'phone'=>$faker->tollFreePhoneNumber,
            'fax'=>$faker->tollFreePhoneNumber,
            'email'=>$faker->email,
            'created_at'=>$faker->iso8601($max = 'now'),
            'updated_at'=>$faker->iso8601($max = 'now'),
    ];
});
