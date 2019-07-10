<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class LinksTableSeeder extends Seeder
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
    	foreach (range(1,10) as $index) {
            $id = DB::table('links')->insertGetId([
	            'url'           => $faker->url,
                'type'          => $faker->numberBetween($min = 1, $max = 3) ,
                'video_id'      => $faker->numberBetween($min = 1, $max = 10),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
	    }
    }
}
