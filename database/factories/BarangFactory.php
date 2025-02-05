<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory {
public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'tgl' => $this->faker->date(),
            'harga_awal' => $this->faker->numberBetween(100000, 1000000),
            'deskripsi_barang' => $this->faker->sentence(10),
        ];
    }
}
