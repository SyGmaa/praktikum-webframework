<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create(['fakultas_id' => 1, 'nama_prodi' => 'teknik informatika', 'kode_prodi' => '0005156', 'jenjang_pendidikan' => 'D4']);
        Prodi::create(['fakultas_id' => 1, 'nama_prodi' => 'teknik informatikass', 'kode_prodi' => '00051562', 'jenjang_pendidikan' => 'S1']);
        Prodi::create(['fakultas_id' => 1, 'nama_prodi' => 'teknik informatikass111', 'kode_prodi' => '1e21e12e1', 'jenjang_pendidikan' => 'S3']);
    }
}
