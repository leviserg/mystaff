<?php

use Illuminate\Database\Seeder;

class Place4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Place4::class, 50000)->create();
        factory(App\Place4::class, 50000)->create();
    }
}
