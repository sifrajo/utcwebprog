<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 11; $i++) {
            Detail::create([
                'book_id' => $i,
                'description' => $faker->paragraph(),
                'author' => $faker->name(),
                'datepost' => $faker->date(),
                'likes' => mt_rand(1, 10)
            ]);
        }
    }
}
