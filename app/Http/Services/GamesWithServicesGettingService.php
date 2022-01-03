<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class GamesWithServicesGettingService
{
    /**
     * @return array|null
     */
    public function getGamesWithServices(): ?array
    {
        $games = DB::table('games')->get();

        foreach($games as $game) {
             $game_services = DB::table('game_services')
                ->select('id', 'game_id', 'service_name')
                ->where('game_id', $game->id)
                ->get();

            $gameWithServices[] = [
                'id' => $game->id,
                'name' => $game->name,
                'slug' => $game->slug,
                'icon_path' => $game->icon_path,
                'services' => $game_services,
            ];
        }

        return $gameWithServices;
    }
}
