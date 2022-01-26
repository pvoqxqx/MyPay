<?php

namespace App\Http\Services;

use App\Models\Game;

class GameAddService
{
    /**
     * @param string $name
     * @param string $slug
     * @param string $icon_path
     */
    public function addGame(string $name, string $slug, string $icon_path)
    {
        $game = new Game();

        $game->name = $name;
        $game->slug = $slug;
        $game->icon_path = $icon_path;

        $game->save();
    }
}
