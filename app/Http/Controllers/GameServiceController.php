<?php

namespace App\Http\Controllers;

use App\Http\Services\GameServicesAddService;
use App\Http\Services\GameServicesGettingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class GameServiceController extends Controller
{
    /**
     * @var GameServicesGettingService
     */
    private GameServicesGettingService $gameServicesGettingService;
    private GameServicesAddService $gameServicesAddService;

    /**
     * @param GameServicesGettingService $gameServiceGettingService
     * @param GameServicesAddService $gameServicesAddService
     */
    public function __construct(
        GameServicesGettingService $gameServiceGettingService,
        GameServicesAddService     $gameServicesAddService
    )
    {
        $this->gameServicesGettingService = $gameServiceGettingService;
        $this->gameServicesAddService = $gameServicesAddService;
    }

    /**
     * @param string $game_slug
     * @return Collection
     */
    public function showGameServices(string $game_slug): Collection
    {
        return $this->gameServicesGettingService->showGameServices($game_slug);
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
