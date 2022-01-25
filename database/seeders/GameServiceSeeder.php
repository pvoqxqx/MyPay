<?php

namespace Database\Seeders;

use App\Models\gameService;
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
        gameService::factory()->count(10)->create();
    }
}
