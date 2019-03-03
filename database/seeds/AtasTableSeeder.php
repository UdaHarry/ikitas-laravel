<?php

use Illuminate\Database\Seeder;

class AtasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Atas::class, 3)->create();
    }
}
