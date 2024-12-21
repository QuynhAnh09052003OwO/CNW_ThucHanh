<?php

namespace Database\Seeders;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\Book::factory(10)->create([]);
        Reader::factory(10)->create([]);
        Borrow::factory(10)->create([]);
    }
}
