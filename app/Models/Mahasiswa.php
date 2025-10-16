<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'angkatan',
        'alamat',
        'email',
        'status_mahasiswa',
        'id_prodi',
        'nidn_pa',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function dosenPA()
    {
        return $this->belongsTo(Dosen::class, 'nidn_pa', 'nidn');
    }
}
