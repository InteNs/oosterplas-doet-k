<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Activity::class, function (Faker\Generator $faker) {
    $startingDate = $faker->dateTimeBetween('this week', '+6 days');
    return [
        'title' => $faker->text(10),
        'description' => $faker->text(100),
        'sorting_date' => $startingDate,
        'display_date' => $faker->text(100),
        'price' => $faker->numberBetween(0, 999),
        'image' => "/images/gunbaan.jpg",
        'priority' => false,
    ];
});

$factory->define(App\Partner::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
        'link' => $faker->word,
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
    ];
});

$factory->define(App\Sponsor::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
        'link' => $faker->word,
        'rank' => $faker->numberBetween(1, 0),
    ];
});

$factory->define(App\Slider::class, function (Faker\Generator $faker) {
    return [
        'logo' => "/images/logo.png",
        'image1' => "/images/backgroundimg.jpg",
        'image2' => "/images/backgroundimg2.jpg",
        'image3' => "/images/backgroundimg3.jpg",
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
        'online' => true,
        'places' => 1,
    ];
});
