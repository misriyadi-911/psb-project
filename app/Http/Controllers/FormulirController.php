<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Siswa;
use App\Models\SekolahAsal;
use App\Models\OrangTua;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tingkat' => 'required',
            'foto' => 'required|max:5000|mimes:jpg,png,jpeg',
            'nama' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'anak_ke' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'nomor_hp' => 'required',
            'kk' => 'required|max:5000|mimes:pdf',
            'akte' => 'required|max:5000|mimes:pdf',
            'raport' => 'required|max:5000|mimes:pdf',
            'tahun_lulus' => 'required',
            'nama_sekolah' => 'required',
            'desa_sekolah' => 'required',
            'kecamatan_sekolah' => 'required',
            'kabupaten_sekolah' => 'required',
            'telepon_sekolah' => 'required',

            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_ayah' => 'required',
            'kecamatan_ayah' => 'required',
            'kabupaten_ayah' => 'required',
            'hp_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',

            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'kabupaten_ibu' => 'required',
            'hp_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',

            'nama_wali' => 'required',
            'tempat_lahir_wali' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_wali' => 'required',
            'kecamatan_wali' => 'required',
            'kabupaten_wali' => 'required',
            'hp_wali' => 'required',
            'pendidikan_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_wali' => 'required',
        ], [
            'tingkat.required' => 'Tingkat pendidikan wajib diisi.',
            'foto.required' => 'Foto wajib diunggah.',
            'foto.max' => 'Ukuran file foto tidak boleh lebih dari 5 MB.',
            'foto.mimes' => 'Format file foto harus berupa JPG, PNG, atau JPEG.',
            'nama.required' => 'Nama siswa wajib diisi.',
            'nisn.required' => 'NISN wajib diisi.',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'berat_badan.required' => 'Berat badan wajib diisi.',
            'tinggi_badan.required' => 'Tinggi badan wajib diisi.',
            'anak_ke.required' => 'Nomor urut anak wajib diisi.',
            'desa.required' => 'Desa wajib diisi.',
            'kecamatan.required' => 'Kecamatan wajib diisi.',
            'kabupaten.required' => 'Kabupaten wajib diisi.',
            'nomor_hp.required' => 'Nomor HP wajib diisi.',
            'kk.required' => 'Kartu Keluarga wajib diunggah.',
            'kk.max' => 'Ukuran file Kartu Keluarga tidak boleh lebih dari 5 MB.',
            'kk.mimes' => 'Format file Kartu Keluarga harus berupa PDF.',
            'akte.required' => 'Akte kelahiran wajib diunggah.',
            'akte.max' => 'Ukuran file Akte kelahiran tidak boleh lebih dari 5 MB.',
            'akte.mimes' => 'Format file Akte kelahiran harus berupa PDF.',
            'raport.required' => 'Scan Raport wajib diunggah.',
            'rapor.max' => 'Ukuran file rapor tidak boleh lebih dari 5 MB.',

            'rapor.mimes' => 'Format file rapor harus berupa PDF.',
            'tahun_lulus.required' => 'tahun lulus pendidikan wajib diisi.',
            'nama_sekolah.required' => 'nama sekolah siswa wajib diisi.',
            'desa_sekolah.required' => 'Desa Sekolah wajib diisi.',
            'kecamatan_sekolah.required' => 'Kecamatan Sekolah wajib diisi.',
            'kabupaten_sekolah.required' => 'Kabupaten Sekolah wajib diisi.',
            'telepon_sekolah.required' => 'Telepon Sekolah wajib diisi.',

            'nama_ayah.required' => 'nama ayah siswa wajib diisi.',
            'tempat_lahir_ayah.required' => 'tempat lahir ayah wajib diisi.',
            'tanggal_lahir_ayah.required' => 'tanggal lahir ayah wajib diisi.',
            'desa_ayah.required' => 'desa ayah wajib diisi.',
            'kecamatan_ayah.required' => 'kecamatan ayah wajib diisi.',
            'kabupaten_ayah.required' => 'kabupaten ayah wajib diisi.',
            'hp_ayah.required' => 'hp ayah wajib diisi.',
            'pendidikan_ayah.required' => 'pendidikan ayah wajib diisi.',
            'pekerjaan_ayah.required' => 'pekerjaan ayah wajib diisi.',
            'penghasilan_ayah.required' => 'penghasilan ayah wajib diisi.',

            'nama_ibu.required' => 'nama ibu siswa wajib diisi.',
            'tempat_lahir_ibu.required' => 'tempat lahir ibu wajib diisi.',
            'tanggal_lahir_ibu.required' => 'tanggal lahir ibu wajib diisi.',
            'desa_ibu.required' => 'desa ibu wajib diisi.',
            'kecamatan_ibu.required' => 'kecamatan ibu wajib diisi.',
            'kabupaten_ibu.required' => 'kabupaten ibu wajib diisi.',
            'hp_ibu.required' => 'hp ibu wajib diisi.',
            'pendidikan_ibu.required' => 'pendidikan ibu wajib diisi.',
            'pekerjaan_ibu.required' => 'pekerjaan ibu wajib diisi.',
            'penghasilan_ibu.required' => 'penghasilan ibu wajib diisi.',

            'nama_wali.required' => 'nama wali siswa wajib diisi.',
            'tempat_lahir_wali.required' => 'tempat lahir wali wajib diisi.',
            'tanggal_lahir_wali.required' => 'tanggal lahir wali wajib diisi.',
            'desa_wali.required' => 'desa wali wajib diisi.',
            'kecamatan_wali.required' => 'kecamatan wali wajib diisi.',
            'kabupaten_wali.required' => 'kabupaten wali wajib diisi.',
            'hp_wali.required' => 'hp wali wajib diisi.',
            'pendidikan_wali.required' => 'pendidikan wali wajib diisi.',
            'pekerjaan_wali.required' => 'pekerjaan wali wajib diisi.',
            'penghasilan_wali.required' => 'penghasilan wali wajib diisi.',
            
        ]);

        $data_siswa = new Siswa;     

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = $request->tingkat;
        if($request->tingkat == '1' || $request->tingkat == '2') {
            $data_siswa->id_kelas = 'VII';
        }
        else{
            $data_siswa->kelas = 'X';
        }
        // Proses unggah foto (gambar)
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $fotoName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('img'), $fotoName); // Simpan ke folder 'img'
            $data_siswa->foto_santri = $fotoName; // Simpan nama file ke database
        } else {
            $data_siswa->foto = 'users.png'; // Foto default jika tidak ada yang diunggah
        }
        $data_siswa->nama = $request->nama;
        $data_siswa->nisn = $request->nisn;
        $data_siswa->tempat_lahir = $request->tempat_lahir;
        $data_siswa->tanggal_lahir = $request->tanggal_lahir;
        $data_siswa->jenis_kelamin = $request->jenis_kelamin;
        $data_siswa->berat_badan = $request->berat_badan;
        $data_siswa->tinggi_badan = $request->tinggi_badan;
        $data_siswa->anak_ke = $request->anak_ke;
        $data_siswa->jumlah_saudara = $request->jumlah_saudara;
        $data_siswa->desa = $request->desa;
        $data_siswa->kecamatan = $request->kecamatan;
        $data_siswa->kabupaten = $request->kabupaten;
        $data_siswa->nomor_hp = $request->nomor_hp;
         // Proses unggah KK (file PDF)
         if ($request->hasFile('kk') && $request->file('kk')->isValid()) {
            $kkName = time() . '-' . $request->file('kk')->getClientOriginalName();
            $request->file('kk')->move(public_path('doc'), $kkName); // Simpan ke folder 'doc'
            $data_siswa->kartu_keluarga = $kkName; // Simpan nama file ke database
        }

        // Proses unggah Akte Kelahiran (file PDF)
        if ($request->hasFile('akte') && $request->file('akte')->isValid()) {
            $akteName = time() . '-' . $request->file('akte')->getClientOriginalName();
            $request->file('akte')->move(public_path('doc'), $akteName); // Simpan ke folder 'doc'
            $data_siswa->akte_kelahiran = $akteName; // Simpan nama file ke database
        }

        // Proses unggah Rapor (file PDF)
        if ($request->hasFile('raport') && $request->file('raport')->isValid()) {
            $raporName = time() . '-' . $request->file('raport')->getClientOriginalName();
            $request->file('raport')->move(public_path('doc'), $raporName); // Simpan ke folder 'doc'
            $data_siswa->raport = $raporName; // Simpan nama file ke database
        }
        $data_siswa->keahlian = $request->keahlian;

        // Simpan data siswa ke database
        $data_siswa->save();

        $data_id_siswa = Siswa::orderByDESC('id')->limit(1)->get();
        $id_siswa = $data_siswa->id;

        $data_sekolah_asal = new SekolahAsal;
        $data_sekolah_asal->id_siswa = $id_siswa;
        $data_sekolah_asal->tahun_lulus = $request->tahun_lulus;
        $data_sekolah_asal->nama_sekolah = $request->nama_sekolah;
        $data_sekolah_asal->desa = $request->desa_sekolah;
        $data_sekolah_asal->kecamatan = $request->kecamatan_sekolah;
        $data_sekolah_asal->kabupaten = $request->kabupaten_sekolah;
        $data_sekolah_asal->telepon_sekolah = $request->kabupaten_sekolah;
        $data_sekolah_asal->save();

        $data_ortu = new OrangTua;
        $data_ortu->id_siswa = $id_siswa;
        $data_ortu->nama_ayah = $request->nama_ayah;
        $data_ortu->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $data_ortu->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $data_ortu->desa_ayah = $request->desa_ayah;
        $data_ortu->kecamatan_ayah = $request->kecamatan_ayah;
        $data_ortu->kabupaten_ayah = $request->kabupaten_ayah;
        $data_ortu->nohp_ayah = $request->hp_ayah;
        $data_ortu->pendidikan_ayah = $request->pendidikan_ayah;
        $data_ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_ortu->penghasilan_ayah = $request->penghasilan_ayah;

        $data_ortu->nama_ibu = $request->nama_ibu;
        $data_ortu->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $data_ortu->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $data_ortu->desa_ibu = $request->desa_ibu;
        $data_ortu->kecamatan_ibu = $request->kecamatan_ibu;
        $data_ortu->kabupaten_ibu = $request->kabupaten_ibu;
        $data_ortu->nohp_ibu = $request->hp_ibu;
        $data_ortu->pendidikan_ibu = $request->pendidikan_ibu;
        $data_ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_ortu->penghasilan_ibu = $request->penghasilan_ibu;

        $data_ortu->nama_wali = $request->nama_wali;
        $data_ortu->tempat_lahir_wali = $request->tempat_lahir_wali;
        $data_ortu->tanggal_lahir_wali = $request->tanggal_lahir_wali;
        $data_ortu->desa_wali = $request->desa_wali;
        $data_ortu->kecamatan_wali = $request->kecamatan_wali;
        $data_ortu->kabupaten_wali = $request->kabupaten_wali;
        $data_ortu->nohp_wali = $request->hp_wali;
        $data_ortu->pendidikan_wali = $request->pendidikan_wali;
        $data_ortu->pekerjaan_wali = $request->pekerjaan_wali;
        $data_ortu->penghasilan_wali = $request->penghasilan_wali;
        $data_ortu->hubungan_wali = $request->hubungan_wali;

        $data_ortu->save();

        $get_data_siswa = Siswa::orderByDESC ('id') ->limit(1)->get();

        return view('daftar_sukses', compact('get_data_siswa'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
