<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create(['nim' => '2222222', 'nama_mahasiswa' => 'gama', 'angkatan' => 2025, 'alamat' => 'adwadw', 'email' => 'adw1@gmail.com', 'status_mahasiswa' => 'Aktif', 'id_prodi' => 1, 'nidn_pa' => '1321313']);
        Mahasiswa::create(['nim' => '2222222s223', 'nama_mahasiswa' => 'gamaadadw', 'angkatan' => 2018, 'alamat' => 'dawadw', 'email' => 'afaf51@gmail.com', 'status_mahasiswa' => 'Lulus', 'id_prodi' => 1, 'nidn_pa' => '515585182']);
    }
}
