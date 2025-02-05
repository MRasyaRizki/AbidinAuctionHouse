<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Masyarakat;
use App\Models\Barang;
use App\Models\Lelang;
use App\Models\Petugas;
use App\Models\Level;
use App\Models\HistoryLelang;

class DatabaseSeeder extends Seeder {
        public function run()
    {
        \App\Models\Level::factory(2)->create();
        \App\Models\Masyarakat::factory(10)->create();
        \App\Models\Barang::factory(10)->create();
        \App\Models\Petugas::factory(5)->create();
        \App\Models\Lelang::factory(5)->create();
        \App\Models\HistoryLelang::factory(10)->create();
    }
}

