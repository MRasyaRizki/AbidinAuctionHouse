<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class PetugasFactory extends Factory {
public function definition()
    {
        return [
            'nama_petugas' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'),
            'id_level' => Level::factory(),
        ];
    }
}


