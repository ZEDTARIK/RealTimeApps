<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;
use App\Category;
use App\User;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {
    
    $title = $faker->sentence;

    return [
        'title'=> $title,
        'slug' => Str::slug($title, '-'),
        'body' => $faker->text,
        'category_id' => function () {
            return Category::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
