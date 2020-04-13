<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'=> $faker->numberBetween(1,10),
        'is_active'=> 1,
        'author'=> $faker->name,
        'photo'=> '/images/user-big2.png',
        'email' => $faker->safeEmail,
        'body' => $faker->paragraphs(1, true),
        'created_at'=>now(),
        'updated_at'=>now()
    ];
});
