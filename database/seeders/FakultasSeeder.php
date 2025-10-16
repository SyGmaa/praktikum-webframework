<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::create(['nama_fakultas' => 'fakultas teknik', 'kode_fakultas' => '000002']);
        Fakultas::create(['nama_fakultas' => 'fakultas kesehatan', 'kode_fakultas' => '55555']);
    }
}
