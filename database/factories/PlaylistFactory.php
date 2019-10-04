<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Playlist::class, function (Faker $faker) {
    return [
        'name' => $faker->text(12),
        'slug' => uniqid(true),
        'channel_id' => function() {return factory(\App\Models\Channel::class)->create();},
    ];
});
