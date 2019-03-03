<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Tengah::class, function (Faker $faker) {
    return [
        'nama'		=> $faker->name,
        'jabatan'		=> 'developer',
        'gambar'	=> 'dev.jpg',
    ];
});
