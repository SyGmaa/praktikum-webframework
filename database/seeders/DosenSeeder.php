<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create(['nidn' => '1321313', 'id_prodi' => 1, 'nama_dosen' => 'buksafni', 'email' => 'ahduw@gmail.com', 'no_telepon' => '082152226262']);
        Dosen::create(['nidn' => '132131312313123111231', 'id_prodi' => 3, 'nama_dosen' => 'BUk kasini', 'email' => 'dadwad@gmail.com', 'no_telepon' => '08215222626212312']);
        Dosen::create(['nidn' => '132131334', 'id_prodi' => 1, 'nama_dosen' => 'BUk diah', 'email' => 'naanan@gmail.com', 'no_telepon' => '082152226262']);
        Dosen::create(['nidn' => '515585182', 'id_prodi' => 1, 'nama_dosen' => 'pakjoko', 'email' => 'buksiah@gmail.com', 'no_telepon' => '081212526228']);
    }
}
