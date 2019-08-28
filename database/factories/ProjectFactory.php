<?php

/** @var Factory $factory */

use App\Project;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(4),
        'owner_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
