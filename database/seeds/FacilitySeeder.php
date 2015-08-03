<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = array(
            array('id' => '1','name' => 'Apartment'),
            array('id' => '2','name' => 'House'),
            array('id' => '3','name' => 'Bed & Breakfast'),
            array('id' => '4','name' => 'Loft'),
            array('id' => '5','name' => 'Townhouse'),
            array('id' => '6','name' => 'Hotel'),
            array('id' => '7','name' => 'Bungalow'),
            array('id' => '8','name' => 'Cabin'),
            array('id' => '9','name' => 'Villa'),
            array('id' => '10','name' => 'Castle'),
            array('id' => '11','name' => 'Dorm'),
            array('id' => '12','name' => 'Treehouse'),
            array('id' => '13','name' => 'Plane'),
            array('id' => '14','name' => 'Camper/RV'),
            array('id' => '15','name' => 'Igloo'),
            array('id' => '16','name' => 'Lighthouse'),
            array('id' => '17','name' => 'Tipi'),
            array('id' => '18','name' => 'Cave'),
            array('id' => '19','name' => 'Island'),
            array('id' => '20','name' => 'Chalet'),
            array('id' => '21','name' => 'Earth House'),
            array('id' => '22','name' => 'Hut'),
            array('id' => '23','name' => 'Tent'),
            array('id' => '24','name' => 'Bush Lodge'),
            array('id' => '25','name' => 'Safari Lodge'),
            array('id' => '26','name' => 'Other')
        );

        DB::table('facilities')->insert( $facilities );

    }

}