<?php
use Faker\Generator as Faker;
$factory->define(App\car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('Aston Martin','Lamborghini','Audi')),
        'Model' => $faker->randomElement($array = array ('Black','Grey','Blue','White','Red')),
        'Year'=> $faker->year($max='now'),
    ];
});
