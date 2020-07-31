<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $name = $faker->name();
    $text = $faker->realText(rand(50, 300));
    $created = $faker->dateTimeBetween('-30 days', '-1 days');

    return [
        'name' => $name,
        'text' => $text,
        'created_at' => $created,
    ];
});
