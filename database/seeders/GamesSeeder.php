<?php

namespace Database\Seeders;

use App\Models\games;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Games::factory()->count(10)->create();
    }
}
