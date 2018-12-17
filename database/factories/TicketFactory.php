<?php

use Faker\Generator as Faker;

$factory->define(\App\Ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'ticket_id' => str_random(10),
    ];
});
