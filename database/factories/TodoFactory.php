<?php

use Faker\Generator as Faker;
use App\Todo;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 20),
        'notes' => $faker->paragraph,
        'due_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks')
    ];
});
