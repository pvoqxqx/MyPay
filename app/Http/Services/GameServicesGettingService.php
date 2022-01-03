<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GameServicesGettingService
{
    /**
     * @param string $game_slug
     * @return Collection
     */
    public function showGameServices(string $game_slug): Collection
    {
        return DB::table('game_services')
            ->select('id', 'game_id', 'service_name')
            ->where('game_slug', $game_slug)
            ->get();
    }
}
