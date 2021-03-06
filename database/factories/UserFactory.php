<?php

use Faker\Generator as Faker;
use App\Category;
use App\Post;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});
$factory->define(Post::class, function (Faker $faker) {
    return [
        'cat_id' => rand(1,10),
        'user_id' => rand(1,10),
        'comment_id' => rand(1,10),
        'title' => $faker->word,
        'image' => $faker->imageUrl,
        'description' => $faker->sentence,
    ];
});
