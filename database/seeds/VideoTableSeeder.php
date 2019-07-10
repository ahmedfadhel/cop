<?php

use Illuminate\Database\Seeder;
use App\Video;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class VideoTableSeeder extends Seeder
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
    	foreach (range(1,100) as $index) {
            $id = DB::table('videos')->insertGetId([
	            'title'         => $faker->sentence($nbWords = 12, $variableNbWords = true),
                'description'   => $faker->text($maxNbChars = 200),
                'length'        => $faker->time($format = 'H:i:s'),
                'views'         => $faker->numberBetween($min = 1000, $max = 9000),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
            $video = Video::find($id);
            $video->stars()->attach($faker->numberBetween($min = 1, $max = 50));
	    }
    }
}
