<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Level>
 */
class LevelFactory extends Factory {
public function definition()
    {
        return [
            'level' => $this->faker->randomElement(['administrator', 'petugas']),
        ];
    }
}

