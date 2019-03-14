<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(Place0TableSeeder::class);
        $this->call(Place1TableSeeder::class);
        $this->call(Place2TableSeeder::class);
        $this->call(Place3TableSeeder::class);
        $this->call(Place4TableSeeder::class);
    }
}
