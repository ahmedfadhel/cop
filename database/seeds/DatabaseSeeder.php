<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(StarsTableSeeder::class);
        // $this->call(VideoTableSeeder::class);
        // $this->call(TagTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        $this->call(CategoryPhotosTableSeeder::class);
        // $this->call(LinksTableSeeder::class);
        // $this->call(PartsTableSeeder::class);
    }
}
