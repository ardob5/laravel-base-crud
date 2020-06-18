<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
      'firstName' => $faker -> firstName(),
      'lastName' => $faker -> lastName(),
      'address' => $faker -> streetAddress(),
      'code' => $faker -> numberBetween($min = 1, $max = 10000),
      'state' => $faker -> state(),
      'phoneNumber' => $faker -> phoneNumber(),
      'role' => $faker -> jobTitle()
    ];
});
