<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<5;$i++){
            $splace = '';
            switch ($i) {
                case 0:
                    $splace ='chief';
                    break;
                case 1:
                    $splace ='deputy';
                    break;
                case 2:
                    $splace ='manager';
                    break;
                case 3:
                    $splace ='engineer';
                    break;
                default:
                    $splace ='programmer';
            }
            DB::table('places')->insert([
                'place' => $splace
            ]);
        };
    }
}
