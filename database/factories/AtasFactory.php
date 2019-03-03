<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Atas::class, function (Faker $faker) {
    return [
        'text1'		=> $faker->word,
        'text2'		=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'gambar'	=> 'gambar.jpg'

    ];
});
