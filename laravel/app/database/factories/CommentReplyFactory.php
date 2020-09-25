<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\CommentReply;
use App\Model;
use Faker\Generator as Faker;

$factory->define(CommentReply::class, function (Faker $faker) {
    return [
        'is_active'=> 1,
        'author'=> $faker->name,
        'photo'=> '/images/user-big.png',
        'email' => $faker->safeEmail,
        'body' => $faker->paragraphs(1, true),
         'created_at'=>now(),
        'updated_at'=>now()
    ];
});
