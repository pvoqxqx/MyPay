<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class gameService
 * @package App\Models
 * @property int $id
 * @property int $game_id
 * @property string $service_name
 */
class GameService extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'game_id',
        'game_slug',
        'service_name',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
