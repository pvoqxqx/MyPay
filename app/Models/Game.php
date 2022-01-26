<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class games
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $icon_path
 */
class Game extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'icon_path',
    ];
    /**
     * @var mixed
     */
    private $gameServices;

    public function gameServices()
    {
        return $this->hasMany('App\Models\GameService');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
