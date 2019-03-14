<?php

use Illuminate\Database\Seeder;

class Place1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Place1::class, 50)->create();
    }
}
