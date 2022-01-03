<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class game_serviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'game_id' => rand(1,9),
            'game_slug' => Str::random(5),
            'service_name' => Str::random(5),
        ];
    }
}
