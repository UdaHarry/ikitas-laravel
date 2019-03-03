<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$faker = Faker::create();
       	DB::table('tabel_about')->insert([
            'headline'		=> $faker->sentence($nbWords = 6, $variableNbWords = true),
	        'deskripsi'		=> $faker->realText(),
	        'gambar'		=> 'gambar.jpg'
        ]);
    }
}
