<?php

namespace Database\Seeders;

use App\Models\Song;
use Database\Factories\SongFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $faker = Faker::create();

        // DB::table('songs')->insert([
        //     'title'    => $faker->sentence(3),
        //     'artist'   => $faker->name(),
        //     'duration' => $faker->time('i:s'),
            
        // ]);



        Song::factory(20)->create();
    }
}
