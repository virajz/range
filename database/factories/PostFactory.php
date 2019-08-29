<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $from = rand(1, 8);
    return [
        'from' => $from,
        'to' => rand($from, 8)
    ];
});
