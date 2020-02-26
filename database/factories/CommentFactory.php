<?php
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $posts = App\Post::pluck('id')->toArray();
    return [
        'post_id' => $faker->randomElement($posts)
    ];
});
