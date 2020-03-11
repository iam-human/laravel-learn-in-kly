<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {        
        $faker = Faker::create('id_ID');
        for ($i=1; $i <=  30 ; $i++) { 
            DB::table('news')->insert([
                'user_id' => $faker->numberBetween(1,10),
                'title' => $faker->title,
                'lead' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'content' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ]);
        }
    }
}
