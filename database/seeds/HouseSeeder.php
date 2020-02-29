<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
    		DB::table('houses')->insert([
    			'item' => $faker->word,
    			'amount' => $faker->numberBetween(1,100)
    		]);
    	}
    }
}
