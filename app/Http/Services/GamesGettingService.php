<?php

namespace App\Http\Services;

use App\Models\Games;
use Illuminate\Support\Collection;

class GamesGettingService
{
    /**
     * @return Collection
     */
    public function show(): Collection
    {
        return Games::all();
    }
}
