<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // password
        'remember_token' => Str::random(10),
        'role' => $faker->randomElement(['student', 'teacher', 'admin', 'accountant', 'librarian']),
        'student_code'   => $faker->unique()->randomNumber(7, false),
        'nationality' => 'PRC',
        'gender' => $faker->randomElement(['male','female']),
        'address' => $faker->address,
        'pic_path' => $faker->imageUrl(640, 480),
        'phone_number'   => $faker->unique()->phoneNumber,
    ];
});
