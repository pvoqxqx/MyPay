<?php

namespace App\Http\Services;

use App\Models\game_service;

class GameServicesAddService
{
    /**
     * @param int $gameId
     * @param string $serviceName
     * @return void
     */
    public function addGameService(int $gameId, string $serviceName)
    {
        $newGameService = new game_service();

        $newGameService->game_id = $gameId;
        $newGameService->service_name = $serviceName;

        $newGameService->save();
    }
}
