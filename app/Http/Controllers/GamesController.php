<?php

namespace App\Http\Controllers;

use App\Http\Services\GameAddService;
use App\Http\Services\GamesGettingService;
use App\Http\Services\GamesWithServicesGettingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class GamesController extends Controller
{
    private GamesGettingService $gamesGettingService;
    private GameAddService $gameAddService;
    private GamesWithServicesGettingService $gamesWithServicesGettingService;

    /**
     * @param GamesWithServicesGettingService $gamesWithServicesGettingService
     * @param GamesGettingService $gamesGettingService
     * @param GameAddService $gameAddService
     */
    public function __construct(
        GamesWithServicesGettingService $gamesWithServicesGettingService,
        GamesGettingService             $gamesGettingService,
        GameAddService                  $gameAddService
    )
    {
        $this->gamesWithServicesGettingService = $gamesWithServicesGettingService;
        $this->gamesGettingService = $gamesGettingService;
        $this->gameAddService = $gameAddService;
    }

    /**
     * @return array
     */
    public function showAllGamesWithService(): array
    {
        return $this->gamesWithServicesGettingService->getGamesWithServices();
    }

    /**
     * @return Collection
     */
    public function showAllGames(): Collection
    {
        return $this->gamesGettingService->show();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function addGame(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'icon_path' => 'required'
        ]);

        $name = $request->name;
        $slug = $request->slug;
        $icon_path = $request->icon_path;

        $this->gameAddService->addGame($name, $slug, $icon_path);

        return back()->with('success', 'Games added successfully.');
    }
}
