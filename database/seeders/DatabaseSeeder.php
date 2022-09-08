<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CardGroup;
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
        $this->call([CardGroupSeeder::class]);
        $this->call([TeamSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([ProjectSeeder::class]);
        $this->call([CardSeeder::class]);
    }
}
