<?php

use Faker\Generator as Faker;

$factory->define(App\Tengah::class, function (Faker $faker) {
    return [
        'nama'		=> $faker->name,
        'jabatan'	=> 'developers',
        'gambar'	=> 'gambar.jpg',
    ];
});
