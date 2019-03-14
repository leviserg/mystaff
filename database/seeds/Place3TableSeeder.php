<?php

use Illuminate\Database\Seeder;

class Place3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Place3::class, 1000)->create();
    }
}
