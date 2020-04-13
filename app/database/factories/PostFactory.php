<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'photo_id' => 1,
        'title' => $faker->sentence(7,11),
        'body' => $faker->paragraphs(rand(10,15), true),
        'slug'=> $faker->slug(),
         'created_at'=>now(),
        'updated_at'=>now()
    ];
});
