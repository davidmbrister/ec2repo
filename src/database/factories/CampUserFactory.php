<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CampUser;
use Faker\Generator as Faker;

$factory->define(CampUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'camp_id' => $faker->randomDigitNotNull,
        'user_account_id' => $faker->randomDigitNotNull,
        'paid_date' => $faker->date('Y-m-d H:i:s'),
        'paid_amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
