<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Readtime;

class ReadtimeSeeder extends Seeder
{
    public function run(): void
    {
        Readtime::create([
            'categories' => 'Quick Reads'
        ]);
        Readtime::create([
            'categories' => 'Medium Reads'
        ]);
        Readtime::create([
            'categories' => 'Long Reads'
        ]);
    }
}
