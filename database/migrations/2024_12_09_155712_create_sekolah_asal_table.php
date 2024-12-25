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
        Schema::create('sekolah_asal', function (Blueprint $table) {
            $table->id();
            $table->string('id_siswa');
            $table->string('tahun_lulus');
            $table->string('nama_sekolah');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('telepon_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_asal');
    }
};
