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
class Games extends Model
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

    public function games()
    {

    }
}
