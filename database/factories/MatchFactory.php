<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MyMatch;

use Faker\Generator as Faker;

$factory->define(MyMatch::class, function (Faker $faker) {
    return [
        'team1' => $faker -> word,
        'team2' => $faker -> word,
        'point1' => $faker -> numberBetween(0, 10),
        'point2' => $faker -> numberBetween(0, 10),
        'result' => rand(0, 1) == 0,
    ];
});
