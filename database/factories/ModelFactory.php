<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use App\Employee;
use App\Role;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'),
        'remember_token' => Str::random(10)
    ];
});

$factory->define(Department::class, function (Faker $faker){
    return [
        'name' => $faker->name
    ];
});

$factory->define(Role::class, function (Faker $faker){
    return [
        'department_id' => $faker->numberBetween(1, 5),
        'name' => $faker->name,
        'salary' => $faker->numberBetween(10000, 50000)
    ];
});

$factory->define(Employee::class, function (Faker $faker){
    return [
        'role_id' => $faker->numberBetween(1, 10),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'contact' => $faker->phoneNumber,
        'address' => $faker->address
    ];
});
