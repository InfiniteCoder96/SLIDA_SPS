<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [

        'sid'=> str_random(10),
        'salutation'=> $faker->name,
        'first_Name'=> $faker->name,
        'middle_Name'=> $faker->name,
        'last_Name'=>$faker->name,
        'DoB'=> $faker->date('Y-m-d'),
        'NIC'=> str_random(10),
        'Gender'=> str_random(10),
        'Address_Res'=> $faker->address,
        'Address_Office'=> $faker->address,
        'Email_Address'=> $faker->unique()->safeEmail,
        'Telephone_No_Mob'=> 1,
        'Telephone_No_Res'=> 1,
        'sector'=> str_random(5),
        'curr_designation'=> str_random(5),
        'Telephone_Office'=> $faker->phoneNumber,
        'service_type'=> str_random(5),
        'managerial_years'=> 5,
        'sponsored'=> str_random(5),
        'employer_name'=> $faker->name,
        'employer_designation'=> str_random(5),
        'employer_address'=> $faker->address,
        'class_type'=> str_random(5)
    ];
});
