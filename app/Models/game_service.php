<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class game_service
 * @package App\Models
 * @property int $id
 * @property int $game_id
 * @property string $service_name
 */
class game_service extends Model
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
}
