<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'tingkat',
        'kelas',
        'foto_santri',
        'nama',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'berat_badan',
        'tinggi_badan',
        'anak_ke',
        'jumlah_saudara',
        'desa',
        'kecamatan',
        'kabupaten',
        'nomor_hp',
        'kartu_keluarga',
        'akte_kelahiran',
        'raport',
        'keahlian',
    ];

    public function SekolahAsal()
    {
        return $this->hasOne(SekolahAsal::class, 'id_siswa');
    }

    public function OrangTua()
    {
        return $this->hasOne(OrangTua::class, 'id_siswa');
    }
}
