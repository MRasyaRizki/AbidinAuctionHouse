<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lelang;
use App\Models\Barang;
use App\Models\Masyarakat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoryLelang>
 */
class HistoryLelangFactory extends Factory {
public function definition()
    {
        return [
            'id_lelang' => Lelang::factory(),
            'id_barang' => Barang::factory(),
            'id_user' => Masyarakat::factory(),
            'penawaran_harga' => $this->faker->numberBetween(150000, 5000000),
        ];
    }
}

