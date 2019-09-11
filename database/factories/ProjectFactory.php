<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1, 1000),
        'title' => $faker->realText(),
        'description' => $faker->realText(),
        'task' => new Task()
    ];
});
