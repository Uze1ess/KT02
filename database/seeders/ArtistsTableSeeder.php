<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;


class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->delete();

        $faker = Faker::create();

        for($i = 0; $i < 50; $i++){
            Artist::create([
                'artist_name' => $faker->name,
                'description' => $faker->sentence(10),
                'media_link' => $faker->url(),
                'art_type' => $faker->randomElement(['Hoi hoa','Am nhac','Van hoc']),
                'cover_image' => $faker->imageUrl(),
            ]);
        }
    }
}
