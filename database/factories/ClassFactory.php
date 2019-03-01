<?php

use Faker\Generator as Faker;
use App\Models\StudentClass;

$factory->define(App\Models\SchoolClass::class,function(Faker $faker){
    
    return [
        "name"=>$faker->name,
        "class_section_id"=> StudentClass::all()->random()->id,
        "seats_available"=>$faker->numberBetween(30,50)
    ];
});
