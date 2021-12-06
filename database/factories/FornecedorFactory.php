<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => "$faker->company $faker->companySuffix",
        'site' => $faker->url,
        'uf' => $faker->randomElement($array = array('SP', 'MG', 'PR', 'RJ', 'SC')),
        'email' => $faker->unique()->email,
    ];
});
