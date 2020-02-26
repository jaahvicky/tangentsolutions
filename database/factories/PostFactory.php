<?php
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $categories = App\Category::pluck('id')->toArray();
    return [
        'name' => $faker->unique()->name,
        'content' => $faker->text,
        'user_id' => $faker->randomElement($users),
        'category_id' => $faker->randomElement($categories)
    ];
});
