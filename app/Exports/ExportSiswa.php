<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use App\Models\Siswa;
use Carbon\Carbon;
Carbon::setLocale('id');

class ExportSiswa implements FromCollection, WithHeadings, WithMapping, WithStyles, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $tingkat,$kelas;
    public function __construct($tingkat, $kelas){
        $this->kelas = $kelas;
        $this->tingkat = $tingkat;
    }

    public function collection()
    {
        return Siswa::where('tingkat', '=', $this->tingkat)
        ->where('kelas', '=', $this->kelas)
        ->with(['SekolahAsal', 'OrangTua'])
        ->orderBy('nama', 'asc')
        ->get();
    }

    public function map($data_siswa):array
    {
        static $index = 1;
        switch ($data_siswa->tingkat) {
            case 1:
                $tingkat = 'MTs';
                break;
            case 2:
                $tingkat = 'SMP';
                break;
            case 3:
                $tingkat = 'MA';
                break;
            default:
                $tingkat = 'Tidak Diketahui';
                break;
        }
        return[
            $index ++,
            $data_siswa->nama,
            $tingkat,
            $data_siswa->kelas,
            $data_siswa->nisn,
            $data_siswa->tempat_lahir,
            $data_siswa->tanggal_lahir = \Carbon\Carbon::parse($data_siswa->tanggal_lahir)->format('d-m-Y'),
            // $data_siswa->tanggal_lahir,
            $data_siswa->jenis_kelamin,
            $data_siswa->berat_badan,
            $data_siswa->tinggi_badan,
            $data_siswa->anak_ke,
            $data_siswa->jumlah_saudara,
            $data_siswa->desa.", ".$data_siswa->kecamatan.", ".$data_siswa->kabupaten,
            $data_siswa->nomor_hp,
            $data_siswa->keahlian,
            $data_siswa->SekolahAsal->nama_sekolah,
            $data_siswa->SekolahAsal->tahun_lulus,
            $data_siswa->SekolahAsal->desa.", ".$data_siswa->SekolahAsal->kecamatan.", ".$data_siswa->SekolahAsal->kabupaten,
            $data_siswa->SekolahAsal->telepon_sekolah,
            $data_siswa->OrangTua->nama_ayah,
            $data_siswa->OrangTua->tempat_lahir_ayah,
            $data_siswa->OrangTua ->tanggal_lahir_ayah = \Carbon\Carbon::parse($data_siswa->OrangTua->tanggal_lahir_ayah)->format('d-m-Y'),
            $data_siswa->OrangTua->desa_ayah.", ".$data_siswa->OrangTua->kecamatan_ayah.", ".$data_siswa->OrangTua->kabupaten_ayah,
            $data_siswa->OrangTua->nohp_ayah,
            $data_siswa->OrangTua->pendidikan_ayah,
            $data_siswa->OrangTua->pekerjaan_ayah,
            $data_siswa->OrangTua->penghasilan_ayah,
            $data_siswa->OrangTua->nama_ibu,
            $data_siswa->OrangTua->tempat_lahir_ibu,
            $data_siswa->OrangTua->tanggal_lahir_ibu = \Carbon\Carbon::parse($data_siswa->OrangTua->tanggal_lahir_ibu)->format('d-m-Y'),
            $data_siswa->OrangTua->desa_ibu.", ".$data_siswa->OrangTua->kecamatan_ibu.", ".$data_siswa->OrangTua->kabupaten_ibu,
            $data_siswa->OrangTua->nohp_ibu,
            $data_siswa->OrangTua->pendidikan_ibu,
            $data_siswa->OrangTua->pekerjaan_ibu,
            $data_siswa->OrangTua->penghasilan_ibu,
            $data_siswa->OrangTua->nama_wali,
            $data_siswa->OrangTua->tempat_lahir_wali,
            $data_siswa->OrangTua->tanggal_lahir_wali = \Carbon\Carbon::parse($data_siswa->OrangTua->tanggal_lahir_wali)->format('d-m-Y'),
            $data_siswa->OrangTua->desa_wali.", ".$data_siswa->OrangTua->kecamatan_wali.", ".$data_siswa->OrangTua->kabupaten_wali,
            $data_siswa->OrangTua->nohp_wali,
            $data_siswa->OrangTua->pendidikan_wali,
            $data_siswa->OrangTua->pekerjaan_wali,
            $data_siswa->OrangTua->penghasilan_wali,
            $data_siswa->OrangTua->hubungan_wali,

        ];
    }

    public function headings(): array
    {
        return[
            'No',
            'Nama',
            'Tingkat',
            'Kelas',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Berat Badan',
            'Tinggi Badan',
            'Anak Ke',
            'Jumlah Saudara',
            'Alamat',
            'Nomor HP',
            'Keahlian',
            'Sekolah Asal',
            'Tahun Lulus',
            'Alamat Sekolah',
            'Telepon Sekolah',
            'Nama Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Alamat Ayah',
            'No HP Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Nama Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'Alamat Ibu',
            'No HP Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nama Wali',
            'Tempat Lahir Wali',
            'Tanggal Lahir Wali',
            'Alamat Wali',
            'No HP Wali',
            'Pendidikan Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'Hubungan Wali'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        //set warp text untuk semua kolom
        $sheet->getStyle('A1:AR1000')->getAlignment()->setWrapText(true);

        //set heading menjadi bold
        $sheet->getStyle('A1:AR1')->applyFromArray([
            'font' => ['bold' => true],
            'alignment' => ['horizontal' => 'center']
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,   // Kolom No
            'B' => 20,  // Kolom Nama
            'C' => 10,  // Kolom Tingkat
            'D' => 10,  // Kolom Kelas
            'E' => 15,  // Kolom NISN
            'F' => 15,  // Kolom Tempat Lahir
            'G' => 15,  // Kolom Tanggal Lahir
            'H' => 10,  // Kolom Jenis Kelamin
            'I' => 10,  // Kolom Berat Badan
            'J' => 10,  // Kolom Tinggi Badan
            'K' => 10,  // Kolom Anak Ke
            'L' => 15,  // Kolom Jumlah Saudara
            'M' => 30,  // Kolom Alamat
            'N' => 15,  // Kolom Nomor HP
            'O' => 20,  // Kolom Keahlian
            'P' => 30,  // Kolom Sekolah Asal
            'Q' => 10,  // Kolom Tahun Lulus
            'R' => 30,  // Kolom Alamat Sekolah
            'S' => 15,  // Kolom Nama Ayah
            'T' => 15,  // Kolom Nama Ayah
            'U' => 15,  // Kolom Tempat Lahir Ayah
            'V' => 15,  // Kolom Tanggal Lahir Ayah
            'W' => 30,  // Kolom Alamat Ayah
            'X' => 20,  // Kolom Nomor HP Ayah
            'Y' => 10,  // Kolom Pendidikan Ayah
            'Z' => 20,  // Kolom Pekerjaan Ayah
            'AA' => 20,  // Kolom Penghasilan Ayah
            'AB' => 15, // Kolom Nama Ibu
            'AC' => 15, // Kolom Tempat Lahir Ibu
            'AD' => 15, // Kolom Tanggal Lahir Ibu
            'AE' => 30, // Kolom Alamat Ibu
            'AF' => 20, // Kolom Nomor HP Ibu
            'AG' => 10, // Kolom Pendidikan Ibu
            'AH' => 20, // Kolom Pekerjaan Ibu
            'AI' => 20, // Kolom Penghasilan Ibu
            'AJ' => 20, // Kolom Hubungan Wali
            'AK' => 15, // Kolom Tempat Lahir Wali
            'AL' => 15, // Kolom Tanggal Lahir Wali
            'AM' => 30, // Kolom Alamat Wali
            'AN' => 20, // Kolom Nomor HP Wali
            'AO' => 10, // Kolom Pendidikan Wali
            'AP' => 20, // Kolom Pekerjaan Wali
            'AQ' => 20, // Kolom Penghasilan Wali
            'AR' => 15, // Kolom Hubungan Wali
        ];
    }
}
