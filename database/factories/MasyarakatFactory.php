<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MasyarakatFactory extends Factory {
public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'),
            'telp' => $this->faker->phoneNumber(),
        ];
    }
}

