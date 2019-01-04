<?php

use Faker\Generator as Faker;

$factory->define(App\Ad::class, function (Faker $faker) {
    return [
	    'user_id' => $faker->numberBetween(1, 3),
	    'title' => $faker->text(50),
	    'description' => $faker->paragraph,
	    'price' => $faker->numberBetween(1, 2000),
	    'featured' => $faker->boolean,
    ];
});
