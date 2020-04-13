<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
     'name' => $faker->randomElement(['Uncategorized','PHP', 'Java', 'JavaScript', 'Java Web', 'Database','Programmer']),
     'description'=>$faker->sentence(7,11),
     'created_at'=>now(),
     'updated_at'=>now()
    ];
});
