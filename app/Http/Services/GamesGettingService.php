<?php

namespace App\Http\Services;

use App\Models\Game;
use Illuminate\Support\Collection;

class GamesGettingService
{
    /**
     * @return Collection
     */
    public function show(): Collection
    {
        return Game::all();
    }
}
