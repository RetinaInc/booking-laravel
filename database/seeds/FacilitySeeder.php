<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = array(
            array('id' => '1', 'name' => 'Essentials', 'is_room' => true),
            array('id' => '2', 'name' => 'TV', 'is_room' => true),
            array('id' => '3', 'name' => 'Cable TV', 'is_room' => true),
            array('id' => '4', 'name' => 'Air Conditioning', 'is_room' => true),
            array('id' => '5', 'name' => 'Heating', 'is_room' => true),
            array('id' => '6', 'name' => 'Kitchen', 'is_room' => true),
            array('id' => '7', 'name' => 'Internet', 'is_room' => true),
            array('id' => '8', 'name' => 'Wireless Internet', 'is_room' => true),
            array('id' => '9', 'name' => 'Hot Tub', 'is_room' => true),
            array('id' => '10', 'name' => 'Washer', 'is_room' => true),
            array('id' => '11', 'name' => 'Pool', 'is_room' => true),
            array('id' => '12', 'name' => 'Washer', 'is_room' => true),
            array('id' => '13', 'name' => 'Dryer', 'is_room' => true),
            array('id' => '14', 'name' => 'Breakfast', 'is_room' => true),
            array('id' => '15', 'name' => 'Free Parking on Premises', 'is_room' => true),
            array('id' => '16', 'name' => 'Gym', 'is_room' => true),
            array('id' => '17', 'name' => 'Elevator in Building', 'is_room' => true),
            array('id' => '18', 'name' => 'Indoor Fireplace', 'is_room' => true),
            array('id' => '19', 'name' => 'Buzzer/Wireless Intercom', 'is_room' => true),
            array('id' => '20', 'name' => 'Doorman', 'is_room' => true),
            array('id' => '21', 'name' => 'Shampoo', 'is_room' => true),
            array('id' => '22', 'name' => 'Family/Kid Friendly', 'is_room' => true),
            array('id' => '23', 'name' => 'Smoking Allowed', 'is_room' => true),
            array('id' => '24', 'name' => 'Suitable for Events', 'is_room' => true),
            array('id' => '25', 'name' => 'Pets Allowed', 'is_room' => true),
            array('id' => '26', 'name' => 'Pets live on this property', 'is_room' => true),
            array('id' => '27', 'name' => 'Wheelchair Accessible', 'is_room' => true),
            array('id' => '28', 'name' => 'Smoke Detector', 'is_room' => true),
            array('id' => '29', 'name' => 'Carbon Monoxide Detector', 'is_room' => true),
            array('id' => '30', 'name' => 'First Aid Kit', 'is_room' => true),
            array('id' => '31', 'name' => 'Safety Card', 'is_room' => true),
            array('id' => '32', 'name' => 'Fire Extinguisher', 'is_room' => true),
        );

        DB::table('facilities')->insert( $facilities );

    }

}