<?php
require 'vendor/autoload.php';

use Faker\Factory;

class Random {
    public static function generatePeople($count = 300) {
        $faker = Factory::create('en_PH');
        $people = [];
        $header = [
            'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay',
            'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 
            'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 
            'Birthdate', 'Email Address', 'Password'
        ];
        $people[] = $header;

        for ($i = 0; $i < $count; $i++) {
            $person = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->streetName,
                $faker->city,
                $faker->state,
                'Philippines',
                $faker->phoneNumber,
                $faker->mobileNumber,
                $faker->company,
                $faker->domainName,
                $faker->jobTitle,
                $faker->safeColorName,
                $faker->date('Y-m-d'),
                $faker->email,
                $faker->password
            ];
            $people[] = $person;
        }

        return $people;
    }
}
?>
