<?php

namespace App\Http\Services;

use App\Models\Game;
use Illuminate\Support\Collection;

class GamesWithServicesGettingService
{
    /**
     * @return Collection
     */
    public function getGamesWithServices(): Collection
    {
        foreach (Game::all() as $game) {
            // TODO заменить на коллекцию
            $gameWithServices[] = [
                'id' => $game->id,
                'name' => $game->name,
                'slug' => $game->slug,
                'icon_path' => $game->icon_path,
                'services' => $game->gameServices,
            ];
        }
        return collect($gameWithServices);
    }
}
