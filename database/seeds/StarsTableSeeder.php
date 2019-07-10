<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class StarsTableSeeder extends Seeder
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
    	foreach (range(1,50) as $index) {
	        DB::table('stars')->insert([
	            'name'         => $faker->name($gender='female'),
                'alias_name'   => $faker->name($gender='female'),
                'gender'        => 'female',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
	        ]);
	    }
    }
}
