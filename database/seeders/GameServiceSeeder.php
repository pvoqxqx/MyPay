<?php

namespace Database\Seeders;

use App\Models\game_service;
use Illuminate\Database\Seeder;

class GameServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        game_service::factory()->count(10)->create();
    }
}
