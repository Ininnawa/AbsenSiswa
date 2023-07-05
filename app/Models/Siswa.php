<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kelas',
        'jenis_kelamin',
        'nis',
    ];

    // Relasi dengan model Absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
