<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        /* 'date_of_birth' => $faker->word, */
        'is_subscribed' => 1,
        'email' => $faker->word,
        /* 'email_verified_at' => $faker->date('Y-m-d H:i:s'), */
        'password' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'role_id' => 4,
        'remember_token' => $faker->word,
/*         'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s') */
    ];
});
