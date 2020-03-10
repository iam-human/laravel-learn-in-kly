<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 40 ; $i++) { 
            DB::table('smartphones')->insert([
                'user_id' =>  $faker->numberBetween(1,10),
                'smartphone' => $faker
            ]);
        }
    }
}
