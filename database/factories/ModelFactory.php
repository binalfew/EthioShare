<?php

$factory->define(EthioShare\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(EthioShare\Exam::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(EthioShare\User::class)->create()->id,
        'subject' => $faker->sentence,
        'description' => $faker->paragraphs(3, true),
        'level' => $faker->word,
        'year' => $faker->year($max = 'now'),
        'school' => $faker->sentence,
        'accessibility' => $faker->word
    ];
});