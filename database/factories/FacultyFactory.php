<?php

use Faker\Generator as Faker;
use App\Models\FacultyType;
use App\Models\Gender;

$factory->define(App\Models\Faculty::class, function(Faker $faker) {

    return [
        "faculty_type_id" => FacultyType::all()->random()->id,
        "name" => $faker->name,
        "email" => $faker->unique()->safeEmail,
        "designation" => "",
        "phone_no" => $faker->phoneNumber,
        "gender_id" => Gender::all()->random()->id,
        "address" => $faker->address
    ];
});

