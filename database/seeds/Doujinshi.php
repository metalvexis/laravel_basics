<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Doujinshi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();
        $count = 20;

        foreach (range(1,$count) as $index) {
	        DB::table('doujinshis')->insert([
	            'author' => $faker->name,
	            'title' => $faker->sentence(3),
	            'published_at' => $faker->date('Y-m-d')
	        ]);
	}
    }
}
