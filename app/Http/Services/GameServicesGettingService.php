<?php

namespace App\Http\Services;

use App\Models\GameService;
use Illuminate\Support\Collection;

class GameServicesGettingService
{
    /**
     * @param string $game_slug
     * @return Collection
     */
    public function showGameServices(string $game_slug): Collection
    {
        return GameService::where('game_slug', $game_slug)->get();
    }
}
