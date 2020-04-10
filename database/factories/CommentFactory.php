<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => function () {
            return factory(App\User::class)->create()->name;
        },
        'email' => function () {
            return factory(App\User::class)->create()->email;
        },
         'website' => $faker->sentence,
         'comment' => $faker->sentence,
         'post_id' => function () {
            return factory(App\Post::class)->create()->id;
        }
    ];


});



