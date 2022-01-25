<?php

namespace App\Http\Services;

use App\Models\gameService;

class GameServicesAddService
{
    /**
     * @param int $gameId
     * @param string $serviceName
     * @return void
     */
    public function addGameService(int $gameId, string $serviceName)
    {
        $newGameService = new gameService();

        $newGameService->game_id = $gameId;
        $newGameService->service_name = $serviceName;

        $newGameService->save();
    }
}
