<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Channel::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->text('15'),
        'slug' => \Str::slug($name),
        'description' => $faker->paragraph,
        'user_id' => function() {factory(\App\Models\User::class)->create();},
    ];
});
