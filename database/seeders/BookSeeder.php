<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 11; $i++) {
            Book::create([
                'readtime_id' => mt_rand(1, 3),
                'title' => $faker->sentence(),
                'description' => $faker->text()
            ]);
        }

    }
}
