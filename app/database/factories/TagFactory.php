<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Tag;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
         'name' => $faker->randomElement(['The first', 'Dream catch', 'Bingo', 'Web Programming', ' Oracle Database','Hacker Side']),
         'description'=>$faker->sentence(7,11),
        'created_at'=>now(),
        'updated_at'=>now()
    ];
});
