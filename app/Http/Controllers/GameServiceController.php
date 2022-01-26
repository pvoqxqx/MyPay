<?php

namespace App\Http\Controllers;

use App\Http\Services\GameServicesAddService;
use App\Models\Game;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class GameServiceController extends Controller
{
    /**
     * @var GameServicesAddService
     */
    private GameServicesAddService $gameServicesAddService;

    /**
     * @param GameServicesAddService $gameServicesAddService
     */
    public function __construct(
        GameServicesAddService $gameServicesAddService
    )
    {
        $this->gameServicesAddService = $gameServicesAddService;
    }

    /**
     * @param Game $game
     * @return Collection
     */
    public function showGameServices(Game $game): Collection
    {
        return $game->gameServices;
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function addGameServices(Request $request): RedirectResponse
    {
        $request->validate([
            'game_id' => 'required',
            'service_name' => 'required',
        ]);

        $game_id = $request->game_id;
        $service_name = $request->service_name;

        $this->gameServicesAddService->addGameService($game_id, $service_name);

        return back()->with('success', 'Game service added successfully.');
    }
}
