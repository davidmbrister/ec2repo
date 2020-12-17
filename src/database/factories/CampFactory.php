<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Camp;
use Faker\Generator as Faker;

$factory->define(Camp::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'description' => $faker->text,
        'photo' => $faker->word,
        'video' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'what_will_student_learn' => $faker->text,
        'age_group' => $faker->word,
        'capacity' => $faker->randomDigitNotNull,
        'discount_price' => $faker->randomDigitNotNull,
        'standard_price' => $faker->randomDigitNotNull,
        'subscriber_count' => $faker->randomDigitNotNull,
        'tags' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'event_id' => null,
        'start' => $faker->date('Y-m-d H:i:s'),
        'end' => $faker->date('Y-m-d H:i:s'),
        'allDay' => 0
    ];
});
