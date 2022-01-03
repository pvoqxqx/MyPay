<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GamesGettingService
{
    /**
     * @return Collection
     */
    public function show(): Collection
    {
        return DB::table('games')->get();
    }
}
