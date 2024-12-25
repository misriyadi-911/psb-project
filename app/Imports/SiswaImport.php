<?php

namespace App\Imports;

use App\Models\Siswa;
use App\Models\SekolahAsal;
use App\Models\OrangTua;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd(array_keys($row));
        // return new Siswa([
        //     'tingkat' => $row['tingkat'],
        //     'kelas' => $row['kelas'],
        //     'foto_santri' => 'users.png',
        //     'nama' => $row['nama'],
        //     'nisn' => $row['nisn'],
        //     'tempat_lahir' => $row['tempat_lahir'],
        //     'tanggal_lahir' => $row['tanggal_lahir'],
        //     'jenis_kelamin' => $row['jenis_kelamin'],
        //     'berat_badan' => $row['berat_badan'],
        //     'tinggi_badan' => $row['tinggi_badan'],
        //     'anak_ke' => $row['anak_ke'],
        //     'jumlah_saudara' => $row['jumlah_saudara'],
        //     'desa' => $row['desa'],
        //     'kecamatan' => $row['kecamatan'],
        //     'kabupaten' => $row['kabupaten'],
        //     'nomor_hp' => $row['nomor_hp'],
        //     'kartu_keluarga' => 'Blank.pdf',
        //     'akte_kelahiran' => 'Blank.pdf',
        //     'raport' => 'Blank.pdf',
        //     'keahlian' => $row['keahlian'],
        // ]);
        $count = Siswa::where('nisn', '=', $row['nisn'])->count();
        if(empty($count)){
            if (array_filter($row)) {
                $data_siswa = new Siswa;
                $data_siswa->tingkat = $row['tingkat'];        
                $data_siswa->kelas = $row['kelas'];
                $data_siswa->foto_santri = 'users.png';
                $data_siswa->nama = $row['nama'];
                $data_siswa->nisn = $row['nisn'];
                $data_siswa->tempat_lahir = $row['tempat_lahir'];
                $data_siswa->tanggal_lahir = $row['tanggal_lahir'];
                $data_siswa->jenis_kelamin = $row['jenis_kelamin'];
                $data_siswa->berat_badan = $row['berat_badan'];
                $data_siswa->tinggi_badan = $row['tinggi_badan'];
                $data_siswa->anak_ke = $row['anak_ke'];
                $data_siswa->jumlah_saudara = $row['jumlah_saudara'];
                $data_siswa->desa = $row['desa'];
                $data_siswa->kecamatan = $row['kecamatan'];
                $data_siswa->kabupaten = $row['kabupaten'];
                $data_siswa->nomor_hp = !empty($row['nomor_hp']) ? $row['nomor_hp'] : '';
                // $data_siswa->nomor_hp = $row['nomor_hp'];
                $data_siswa->kartu_keluarga = 'Blank.pdf';
                $data_siswa->akte_kelahiran = 'Blank.pdf';
                $data_siswa->raport = 'Blank.pdf';        
                $data_siswa->keahlian = $row['keahlian'];

                // Simpan data siswa ke database
                $data_siswa->save();
                $id_siswa = $data_siswa->id;

                $data_sekolah_asal = new SekolahAsal;
                $data_sekolah_asal->id_siswa = $id_siswa;
                $data_sekolah_asal->tahun_lulus = $row['tahun_lulus'];
                $data_sekolah_asal->nama_sekolah = $row['sekolah_asal'];
                $data_sekolah_asal->desa = $row['desa_sekolah'];
                $data_sekolah_asal->kecamatan = $row['kecamatan_sekolah'];
                $data_sekolah_asal->kabupaten = $row['kabupaten_sekolah'];
                $data_sekolah_asal->telepon_sekolah = !empty($row['telepon_sekolah']) ? $row['telepon_sekolah'] : '';
                // $data_sekolah_asal->telepon_sekolah = $row['telepon_sekolah'];
                $data_sekolah_asal->save();

                $data_ortu = new OrangTua;
                $data_ortu->id_siswa = $id_siswa;
                $data_ortu->nama_ayah = $row['nama_ayah'];
                $data_ortu->tempat_lahir_ayah = $row['tempat_lahir_ayah'];
                $data_ortu->tanggal_lahir_ayah = $row['tanggal_lahir_ayah'];
                $data_ortu->desa_ayah = $row['desa_ayah'];
                $data_ortu->kecamatan_ayah = $row['kecamatan_ayah'];
                $data_ortu->kabupaten_ayah = $row['kabupaten_ayah'];
                $data_ortu->nohp_ayah = !empty($row['nohp_ayah']) ? $row['nohp_ayah'] : '';
                // $data_ortu->nohp_ayah = $row['nohp_ayah'];
                $data_ortu->pendidikan_ayah = $row['pendidikan_ayah'];
                $data_ortu->pekerjaan_ayah = $row['pekerjaan_ayah'];
                $data_ortu->penghasilan_ayah = $row['penghasilan_ayah'];

                $data_ortu->nama_ibu = $row['nama_ibu'];
                $data_ortu->tempat_lahir_ibu = $row['tempat_lahir_ibu'];
                $data_ortu->tanggal_lahir_ibu = $row['tanggal_lahir_ibu'];
                $data_ortu->desa_ibu = $row['desa_ibu'];
                $data_ortu->kecamatan_ibu = $row['kecamatan_ibu'];
                $data_ortu->kabupaten_ibu = $row['kabupaten_ibu'];
                $data_ortu->nohp_ibu = !empty($row['nohp_ibu']) ? $row['nohp_ibu'] : '';
                // $data_ortu->nohp_ibu = $row['nohp_ibu'];
                $data_ortu->pendidikan_ibu = $row['pendidikan_ibu'];
                $data_ortu->pekerjaan_ibu = $row['pekerjaan_ibu'];
                $data_ortu->penghasilan_ibu = $row['penghasilan_ibu'];

                $data_ortu->nama_wali = $row['nama_wali'];
                $data_ortu->tempat_lahir_wali = $row['tempat_lahir_wali'];
                $data_ortu->tanggal_lahir_wali = $row['tanggal_lahir_wali'];
                $data_ortu->desa_wali = $row['desa_wali'];
                $data_ortu->kecamatan_wali = $row['kecamatan_wali'];
                $data_ortu->kabupaten_wali = $row['kabupaten_wali'];
                $data_ortu->nohp_wali = !empty($row['nohp_wali']) ? $row['nohp_wali'] : '';
                // $data_ortu->nohp_wali = $row['nohp_wali'];
                $data_ortu->pendidikan_wali = $row['pendidikan_wali'];
                $data_ortu->pekerjaan_wali = $row['pekerjaan_wali'];
                $data_ortu->penghasilan_wali = $row['penghasilan_wali'];
                $data_ortu->hubungan_wali = $row['hubungan_wali'];

                $data_ortu->save();

            }
            
        }
        
        //source code import menggunakan array dan validasi NISN jika sama
        // if (!Siswa::where('nisn', $row['nisn'])->exists()) {
        //     $data_siswa = Siswa::create([
        //         'tingkat' => $row['tingkat'],
        //         'kelas' => $row['kelas'],
        //         'foto_santri' => 'users.png',
        //         'nama' => $row['nama'],
        //         'nisn' => $row['nisn'],
        //         'tempat_lahir' => $row['tempat_lahir'],
        //         'tanggal_lahir' => $row['tanggal_lahir'],
        //         'jenis_kelamin' => $row['jenis_kelamin'],
        //         'berat_badan' => $row['berat_badan'],
        //         'tinggi_badan' => $row['tinggi_badan'],
        //         'anak_ke' => $row['anak_ke'],
        //         'jumlah_saudara' => $row['jumlah_saudara'],
        //         'desa' => $row['desa'],
        //         'kecamatan' => $row['kecamatan'],
        //         'kabupaten' => $row['kabupaten'],
        //         'nomor_hp' => $row['nomor_hp'] ?? '',
        //         'keahlian' => $row['keahlian'],
        //         'kartu_keluarga' => 'Blank.pdf',
        //         'akte_kelahiran' => 'Blank.pdf',
        //         'raport' => 'Blank.pdf',
        //     ]);
    
        //     $data_siswa->sekolahAsal()->create([
        //         'tahun_lulus' => $row['tahun_lulus'],
        //         'nama_sekolah' => $row['sekolah_asal'],
        //         'desa' => $row['desa_sekolah'],
        //         'kecamatan' => $row['kecamatan_sekolah'],
        //         'kabupaten' => $row['kabupaten_sekolah'],
        //         'telepon_sekolah' => $row['telepon_sekolah'] ?? '',
        //     ]);
    
        //     $data_siswa->orangTua()->create([
        //         'nama_ayah' => $row['nama_ayah'],
        //         // Lanjutkan sesuai dengan struktur data orang tua
        //     ]);
        // }

    }
}
