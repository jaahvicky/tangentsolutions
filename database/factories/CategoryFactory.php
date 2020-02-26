<?php
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
