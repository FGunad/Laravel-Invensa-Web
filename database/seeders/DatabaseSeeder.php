<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LevelTableSeeder;
use Database\Seeders\PetugasTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LevelTableSeeder::class);
        $this->call(PetugasTableSeeder::class);
    }
}
