<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama_mahasiswa');
            $table->year('angkatan');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->enum('status_mahasiswa', ['Aktif', 'Tidak Aktif', 'Cuti', 'Lulus']);
            $table->foreignId('id_prodi')->constrained('prodi')->onDelete('cascade');
            $table->string('nidn_pa')->nullable();
            $table->foreign('nidn_pa')->references('nidn')->on('dosen')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
