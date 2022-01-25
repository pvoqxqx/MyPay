<?php

namespace App\Http\Controllers;

use App\Http\Services\GameAddService;
use App\Http\Services\GamesWithServicesGettingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    private GameAddService $gameAddService;
    private GamesWithServicesGettingService $gamesWithServicesGettingService;

    /**
     * @param GamesWithServicesGettingService $gamesWithServicesGettingService
     * @param GameAddService $gameAddService
     */
    public function __construct(
        GamesWithServicesGettingService $gamesWithServicesGettingService,
        GameAddService                  $gameAddService
    )
    {
        $this->gamesWithServicesGettingService = $gamesWithServicesGettingService;
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

        // Подготавливаем данные для добавления игры
        $name = $request->name;
        $slug = $request->slug;
        $icon_path = $request->icon_path;

        $this->gameAddService->addGame($name, $slug, $icon_path);

        return back()->with('success', 'Games added successfully.');
    }
}
