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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
		'name' => $faker->firstName,
		'surname' => $faker->lastName ,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => "Guest"
		//'image' => $faker->image('/storage/app/public/img', 400, 400, null, false),
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text(50),
        'genre_id' => random_int(1, 4),
        'description' => $faker->text(100)
    ];
});

$factory->define(App\Show::class, function (Faker\Generator $faker) {
    return [
		'date' => $faker->dateTimeBetween('- 30 days', '+ 30 days', null),
		'event_id' => random_int(1, 20),
		'ubication_id' => random_int(1, 10)
    ];
});

$factory->define(App\Ubication::class, function (Faker\Generator $faker) {
    return [
		'name' => $faker->text(20),
		'location' => $faker->text(20)
    ];
});
