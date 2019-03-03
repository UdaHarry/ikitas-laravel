<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BawahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_bawah')->insert([
            'maps'		=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9604483955723!2d110.38979251472107!3d-7.013934494933537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b08ecae27d3%3A0xbca7db646419b713!2sIKITAS+3+Menoreh!5e0!3m2!1sid!2sid!4v1551584753929',
	        'email'		=> 'admin@ikitas.com',
	        'telepon'	=> '(021)1234567',
	        'hp'		=> '085432109876',
	        'whatsapp'	=> '085432109876',
        ]);
    }
}

