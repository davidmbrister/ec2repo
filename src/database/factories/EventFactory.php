<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'title' => $faker->word,
        'start' => $faker->date('Y-m-d H:i:s'),
        'end' => $faker->date('Y-m-d H:i:s'),
        'allDay' => $faker->unique()->numberBetween($min = 1, $max = 2),
        'description' => $faker->word,
        'type' => $faker->word
    ];
});
