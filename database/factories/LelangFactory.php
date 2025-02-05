<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;
use App\Models\Masyarakat;
use App\Models\Petugas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lelang>
 */
class LelangFactory extends Factory {
public function definition()
    {
        return [
            'id_barang' => Barang::factory(),
            'tgl_lelang' => $this->faker->date(),
            'harga_akhir' => $this->faker->numberBetween(100000, 2000000),
            'id_user' => Masyarakat::factory(),
            'id_petugas' => Petugas::factory(),
            'status' => $this->faker->randomElement(['dibuka', 'ditutup']),
        ];
    }
}

