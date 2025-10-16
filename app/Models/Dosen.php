<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $primaryKey = 'nidn';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nidn',
        'id_prodi',
        'nama_dosen',
        'email',
        'no_telepon',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'nidn_pa', 'nidn');
    }
}
