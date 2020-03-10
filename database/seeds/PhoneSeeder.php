<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++){
            //insert to phone table
            DB::table('phone')->insert([
                'user_id' => $i,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
