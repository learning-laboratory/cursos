<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
         'file'=> 'placeholder.jpg',
             'created_at'=>now(),
        'updated_at'=>now()
    ];
});
