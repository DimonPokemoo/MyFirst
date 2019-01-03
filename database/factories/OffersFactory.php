<?php

use App\Models\Offer;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'type_object' => $faker->randomElement(['laptop','tv']),
        'brand' => $faker->text,
        'price' => $faker->numberBetween(0,100),
        'currency' => $faker->randomElement(['UAH','EUR','USD']),
        'phone' => $faker->phoneNumber,
        'extra_data' => $faker->text,
        'store_id' => $faker->numberBetween(1,3),
    ];
});