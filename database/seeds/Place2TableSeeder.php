<?php

use Illuminate\Database\Seeder;

class Place2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Place2::class, 200)->create();
    }
}
