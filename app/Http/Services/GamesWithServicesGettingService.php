<?php

namespace App\Http\Services;

use App\Models\Games;
use App\Models\GameService;

class GamesWithServicesGettingService
{
    /**
     * @return array|null
     */
    public function getGamesWithServices(): ?array
    {
        $games = Games::all();

        foreach ($games as $game) {
            $game_services = GameService::where('game_id', $game->id)->get();

            $gameWithServices[] = [
                'id' => $game->id,
                'name' => $game->name,
                'slug' => $game->slug,
                'icon_path' => $game->icon_path,
                'services' => $game_services
            ];
        }

        return $gameWithServices;
    }
}
