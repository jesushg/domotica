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

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});



$factory->define(App\Sensor::class, function (Faker\Generator $faker) {
    return [
        'channel' => $faker->unique()->numberBetween(0,50),
        'emulated' => $faker->boolean(),
        'description' => $faker->sentence(),
        'type' => $faker->randomElement(\App\Sensor::$types),
        'value' => $faker->randomNumber(),
        'refreshTime' => $faker->numberBetween(0,3600)
    ];
});

$factory->define(App\ActuatorLuminosity::class, function (Faker\Generator $faker) {
    return [
        'channel' => $faker->unique()->numberBetween(0,50),
        'emulated' => $faker->boolean(),
        'description' => $faker->sentence(),
        'type' => $faker->randomElement(\App\ActuatorLuminosity::$types),
        'percentValue' => $faker->numberBetween(0,100)
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_ES');
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'password' => $faker->password(),
        'email' => $faker->email,
        'rol' => $faker->randomElement(\App\User::$roles),
        'password' => bcrypt('123456'),
        'token' => bcrypt(date('YmdHms')),
    ];
});
