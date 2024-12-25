<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahAsal extends Model
{
    protected $table = 'sekolah_asal';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
