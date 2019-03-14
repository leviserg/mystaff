<?php

use Illuminate\Database\Seeder;

class Place0TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Place0::class, 5)->create();
    }
}
