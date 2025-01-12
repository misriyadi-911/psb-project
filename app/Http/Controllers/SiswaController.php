<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SiswaImport;
use App\Exports\ExportSiswa;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Siswa;
use App\Models\SekolahAsal;
use App\Models\OrangTua;
use App\Models\Kelas;

use PhpOffice\PhpWord\TemplateProcessor;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index_mts(Request $erquest)
    {
        $data_kelas = Kelas::where("tingkat", "=", "1")->get();
        if($erquest->ajax()) {
            $data_siswa = Siswa::where ('tingkat', '=', '1')
            ->orderBy('kelas', 'asc')
            ->orderBy('nama', 'asc')
            ->get();
            return DataTables::of($data_siswa)
            ->addColumn('foto', function($data_siswa){
                return '<img src="'.asset('img/'.$data_siswa->foto_santri) .'" alt="Avatar" height="50" class="rounded-circle" />';
            })
            ->addColumn('nama', function($data_siswa){
                return $data_siswa->nama;
            })
            ->addColumn('kelas', function($data_siswa){
                return $data_siswa->kelas;
            })
            ->addColumn('tetala', function($data_siswa){
                return $data_siswa->tempat_lahir.",".$data_siswa->tanggal_lahir;
            })
            ->addColumn('jenis_kelamin', function($data_siswa){
                return $data_siswa->jenis_kelamin;
            })
            ->addColumn('alamat', function($data_siswa){
                return $data_siswa->desa.",".$data_siswa->kecamatan.",".$data_siswa->kabupaten;
            })
            ->addColumn('aksi', function($data_siswa){
                return '<a class="" href="'.url('/siswa/mts/detail/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-info"><i class="bx bx-show me-1"></i>Detail</button>
                        </a>
                        <a class="" href="'.url('/siswa/mts/edit/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-warning"><i class="bx bx-edit me-1"></i>Edit</button>
                        </a>
                        <a class="" href="'.url('/siswa/mts/hapus/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-danger"><i class="bx bx-trash me-1"></i>Hapus</button>
                        </a>';
            })
            ->rawColumns(['foto','aksi'])
            ->make(true);
        }
        return view ('siswa_mts.siswa_mts', compact('data_kelas'));
    }

    public function index_smp(Request $erquest)
    {
        $data_kelas = Kelas::where("tingkat", "=", "2")->get();
        if($erquest->ajax()) {
            $data_siswa = Siswa::where ('tingkat', '=', '2')
            ->orderBy('kelas', 'asc')
            ->orderBy('nama', 'asc')
            ->get();
            return DataTables::of($data_siswa)
            ->addColumn('foto', function($data_siswa){
                return '<img src="'.asset('img/'.$data_siswa->foto_santri) .'" alt="Avatar" height="50" class="rounded-circle" />';
            })
            ->addColumn('nama', function($data_siswa){
                return $data_siswa->nama;
            })
            ->addColumn('kelas', function($data_siswa){
                return $data_siswa->kelas;
            })
            ->addColumn('tetala', function($data_siswa){
                return $data_siswa->tempat_lahir.",".$data_siswa->tanggal_lahir;
            })
            ->addColumn('jenis_kelamin', function($data_siswa){
                return $data_siswa->jenis_kelamin;
            })
            ->addColumn('alamat', function($data_siswa){
                return $data_siswa->desa.",".$data_siswa->kecamatan.",".$data_siswa->kabupaten;
            })
            ->addColumn('aksi', function($data_siswa){
                return '<a class="" href="'.url('/siswa/smp/detail/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-info"><i class="bx bx-show me-1"></i>Detail</button>
                        </a>
                        <a class="" href="'.url('/siswa/smp/edit/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-warning"><i class="bx bx-edit me-1"></i>Edit</button>
                        </a>
                        <a class="" href="'.url('/siswa/smp/hapus/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-danger"><i class="bx bx-trash me-1"></i>Hapus</button>
                        </a>';
            })
            ->rawColumns(['foto','aksi'])
            ->make(true);
        }
        return view ('siswa_smp.siswa_smp', compact('data_kelas'));
    }

    public function index_ma(Request $erquest)
    {
        $data_kelas = Kelas::where("tingkat", "=", "3")->get();
        if($erquest->ajax()) {
            $data_siswa = Siswa::where ('tingkat', '=', '3')
            ->orderBy('kelas', 'asc')
            ->orderBy('nama', 'asc')
            ->get();
            return DataTables::of($data_siswa)
            ->addColumn('foto', function($data_siswa){
                return '<img src="'.asset('img/'.$data_siswa->foto_santri) .'" alt="Avatar" height="50" class="rounded-circle" />';
            })
            ->addColumn('nama', function($data_siswa){
                return $data_siswa->nama;
            })
            ->addColumn('kelas', function($data_siswa){
                return $data_siswa->kelas;
            })
            ->addColumn('tetala', function($data_siswa){
                return $data_siswa->tempat_lahir.",".$data_siswa->tanggal_lahir;
            })
            ->addColumn('jenis_kelamin', function($data_siswa){
                return $data_siswa->jenis_kelamin;
            })
            ->addColumn('alamat', function($data_siswa){
                return $data_siswa->desa.",".$data_siswa->kecamatan.",".$data_siswa->kabupaten;
            })
            ->addColumn('aksi', function($data_siswa){
                return '<a class="" href="'.url('/siswa/ma/detail/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-info"><i class="bx bx-show me-1"></i>Detail</button>
                        </a>
                        <a class="" href="'.url('/siswa/ma/edit/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-warning"><i class="bx bx-edit me-1"></i>Edit</button>
                        </a>
                        <a class="" href="'.url('/siswa/ma/hapus/'.$data_siswa->id) .'">
                            <button type="button" class="btn btn-danger"><i class="bx bx-trash me-1"></i>Hapus</button>
                        </a>';
            })
            ->rawColumns(['foto','aksi'])
            ->make(true);
        }
        return view ('siswa_ma.siswa_ma', compact('data_kelas'));
    }

    // export data
    public function export ($tingkat, $kelas)
    {
        return Excel::download(new ExportSiswa($tingkat, $kelas), 'data_siswa.xlsx');
    }

    public function download_data ($id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah = SekolahAsal::where('id_siswa','=',$id)->get()[0];
        $data_orangtua = OrangTua::where('id_siswa','=',$id)->get()[0];
        // dd($data_orangtua->kabupaten_ibu);
        $templateWord = new TemplateProcessor('word-template/data.docx');
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
        $tanggal_lahir = \Carbon\Carbon::parse($data_siswa->tanggal_lahir)->format('d-m-Y');
        $tanggal_lahir_ayah = \Carbon\Carbon::parse($data_orangtua->tanggal_lahir_ayah)->format('d-m-Y');
        $tanggal_lahir_ibu = \Carbon\Carbon::parse($data_orangtua->tanggal_lahir_ibu)->format('d-m-Y');
        $tanggal_lahir_wali = \Carbon\Carbon::parse($data_orangtua->tanggal_lahir_wali)->format('d-m-Y');
        $templateWord->setValues([
            'nama' => $data_siswa->nama,
            'kelas' => $data_siswa->kelas,
            'tingkat' => $tingkat,
            'nisn' => $data_siswa->nisn,
            'tetala' => $data_siswa->tempat_lahir.", ".$tanggal_lahir,
            'jenis_kelamin' => $data_siswa->jenis_kelamin,
            'berat_badan' => $data_siswa->berat_badan,
            'tinggi_badan' => $data_siswa->tinggi_badan,
            'anak_ke' => $data_siswa->anak_ke,
            'jumlah_saudara' => $data_siswa->jumlah_saudara,
            'desa' => $data_siswa->desa,
            'kecamatan' => $data_siswa->kecamatan,
            'kabupaten' => $data_siswa->kabupaten,
            'nomor_hp' => $data_siswa->nomor_hp,
            'keahlian' => $data_siswa->keahlian,
            'nama_sekolah' => $data_sekolah->nama_sekolah,
            'tahun_lulus' => $data_sekolah->tahun_lulus,
            'desa_sekolah' => $data_sekolah->desa,
            'kecamatan_sekolah' => $data_sekolah->kecamatan,
            'kabupaten_sekolah' => $data_sekolah->kabupaten,
            'telepon_sekolah' => $data_sekolah->telepon_sekolah,
            'nama_ayah' => $data_orangtua->nama_ayah,
            'tetala_ayah' => $data_orangtua->tempat_lahir_ayah.", ".$tanggal_lahir_ayah,
            'desa_ayah' => $data_orangtua->desa_ayah,
            'kecamatan_ayah' => $data_orangtua->kecamatan_ayah,
            'kabupaten_ayah' => $data_orangtua->kabupaten_ayah,
            'nohp_ayah' => $data_orangtua->nohp_ayah,
            'pendidikan_ayah' => $data_orangtua->pendidikan_ayah,
            'pekerjaan_ayah' => $data_orangtua->pekerjaan_ayah,
            'penghasilan_ayah' => $data_orangtua->penghasilan_ayah,
            'nama_ibu' => $data_orangtua->nama_ibu,
            'tetala_ibu' => $data_orangtua->tempat_lahir_ibu.", ".$tanggal_lahir_ibu,
            'desa_ibu' => $data_orangtua->desa_ibu,
            'kecamatan_ibu' => $data_orangtua->kecamatan_ibu,
            'kabupaten_ibu' => $data_orangtua->kabupaten_ibu,
            'nohp_ibu' => $data_orangtua->nohp_ibu,
            'pendidikan_ibu' => $data_orangtua->pendidikan_ibu,
            'pekerjaan_ibu' => $data_orangtua->pekerjaan_ibu,
            'penghasilan_ibu' => $data_orangtua->penghasilan_ibu,
            'nama_wali' => $data_orangtua->nama_wali,
            'tetala_wali' => $data_orangtua->tempat_lahir_wali.", ".$tanggal_lahir_wali,
            'desa_wali' => $data_orangtua->desa_wali,
            'kecamatan_wali' => $data_orangtua->kecamatan_wali,
            'kabupaten_wali' => $data_orangtua->kabupaten_wali,
            'nohp_wali' => $data_orangtua->nohp_wali,
            'pendidikan_wali' => $data_orangtua->pendidikan_wali,
            'pekerjaan_wali' => $data_orangtua->pekerjaan_wali,
            'penghasilan_wali' => $data_orangtua->penghasilan_wali,
            'hubungan_wali' => $data_orangtua->hubungan_wali,
        ]);
        $fotoPath = 'img/' . $data_siswa->foto_santri; // Pastikan nama file foto ada di database
        if (file_exists($fotoPath)) {
            list($originalWidth, $originalHeight) = getimagesize($fotoPath);

            // Tentukan tinggi tetap (misal 100px), lebar dihitung otomatis
            $targetHeightCm = 4; // Misalnya 5 cm
            $pixelsPerCm = 37.7952755906;
            $targetHeight = $targetHeightCm * $pixelsPerCm;
            $targetWidth = ($originalWidth / $originalHeight) * $targetHeight;
            $templateWord->setImageValue('foto', [
                'path' => $fotoPath,
                'width' => $targetHeight,  // Atur lebar gambar (dalam pixel)
                'height' => $targetWidth, // Atur tinggi gambar (dalam pixel)
                'ratio'  => true, // Menjaga rasio gambar
            ]);
        } else {
            $templateWord->setValue('foto', 'Foto tidak tersedia');
        }
        $fileName = $data_siswa->nama;
        $templateWord->saveAs('word-template/'.$fileName.'.docx');
        return response()->download('word-template/'.$fileName.'.docx')->deleteFileAfterSend(true);
    }
    

    /**
     * Show the form for creating a new resource.
     */

     //siswa mts
    public function create_mts()
    {
        $data_kelas = Kelas::where('tingkat','=','1')->get();
        // dd($data_kelas);
        return view ('siswa_mts.tambah_siswa_mts', compact('data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_mts(Request $request)
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
            'hubungan_wali' => 'required',
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
            'hubungan_wali.required' => 'hubungan wali wajib diisi.',
            
        ]);

        $data_siswa = new Siswa;     

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = $request->tingkat;        
        $data_siswa->kelas = $request->kelas;
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
        $data_sekolah_asal->telepon_sekolah = $request->telepon_sekolah;
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

        return redirect('/siswa/mts')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show_mts(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_mts.detail_siswa_mts', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_mts(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_mts.edit_siswa_mts', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_mts(Request $request)
    {
        $validateData = $request->validate([
            'tingkat' => 'required',
            'foto' => 'max:5000|mimes:jpg,png,jpeg',
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
            'kk' => 'max:5000|mimes:pdf',
            'akte' => 'max:5000|mimes:pdf',
            'raport' => 'max:5000|mimes:pdf',
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
            'nohp_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',

            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'kabupaten_ibu' => 'required',
            'nohp_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',

            'nama_wali' => 'required',
            'tempat_lahir_wali' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_wali' => 'required',
            'kecamatan_wali' => 'required',
            'kabupaten_wali' => 'required',
            'nohp_wali' => 'required',
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
            'nohp_ayah.required' => 'hp ayah wajib diisi.',
            'pendidikan_ayah.required' => 'pendidikan ayah wajib diisi.',
            'pekerjaan_ayah.required' => 'pekerjaan ayah wajib diisi.',
            'penghasilan_ayah.required' => 'penghasilan ayah wajib diisi.',

            'nama_ibu.required' => 'nama ibu siswa wajib diisi.',
            'tempat_lahir_ibu.required' => 'tempat lahir ibu wajib diisi.',
            'tanggal_lahir_ibu.required' => 'tanggal lahir ibu wajib diisi.',
            'desa_ibu.required' => 'desa ibu wajib diisi.',
            'kecamatan_ibu.required' => 'kecamatan ibu wajib diisi.',
            'kabupaten_ibu.required' => 'kabupaten ibu wajib diisi.',
            'nohp_ibu.required' => 'hp ibu wajib diisi.',
            'pendidikan_ibu.required' => 'pendidikan ibu wajib diisi.',
            'pekerjaan_ibu.required' => 'pekerjaan ibu wajib diisi.',
            'penghasilan_ibu.required' => 'penghasilan ibu wajib diisi.',

            'nama_wali.required' => 'nama wali siswa wajib diisi.',
            'tempat_lahir_wali.required' => 'tempat lahir wali wajib diisi.',
            'tanggal_lahir_wali.required' => 'tanggal lahir wali wajib diisi.',
            'desa_wali.required' => 'desa wali wajib diisi.',
            'kecamatan_wali.required' => 'kecamatan wali wajib diisi.',
            'kabupaten_wali.required' => 'kabupaten wali wajib diisi.',
            'nohp_wali.required' => 'hp wali wajib diisi.',
            'pendidikan_wali.required' => 'pendidikan wali wajib diisi.',
            'pekerjaan_wali.required' => 'pekerjaan wali wajib diisi.',
            'penghasilan_wali.required' => 'penghasilan wali wajib diisi.',
            
        ]);

        $data_siswa = Siswa::where('id','=',$request->id_siswa)->get()[0];
         

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = Str::lower($request->tingkat);
        $data_siswa->kelas = $request->kelas;
        // Proses unggah foto (gambar)
        if($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto_santri == 'users.png') {
            
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        elseif ($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto != 'users.png') {
            File::delete(public_path('img').'/'.$data_siswa->foto_santri);
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        else {
            $data_siswa->foto_santri = $request->foto_lama;
        }

        // if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        //     $fotoName = time() . '-' . $request->file('foto')->getClientOriginalName();
        //     $request->file('foto')->move(public_path('img'), $fotoName); // Simpan ke folder 'img'
        //     $data_siswa->foto_santri = $fotoName; // Simpan nama file ke database
        // } else {
        //     $data_siswa->foto = 'users.png'; // Foto default jika tidak ada yang diunggah
        // }
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
            File::delete(public_path('doc').'/'.$data_siswa->kartu_keluarga);
            $kkName = time() . '-' . $request->file('kk')->getClientOriginalName();
            $request->file('kk')->move(public_path('doc'), $kkName); // Simpan ke folder 'doc'
            $data_siswa->kartu_keluarga = $kkName; // Simpan nama file ke database
        } else {
            $data_siswa->kartu_keluarga = $request->kk_lama;
        }

        // Proses unggah Akte Kelahiran (file PDF)
        if ($request->hasFile('akte') && $request->file('akte')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
            $akteName = time() . '-' . $request->file('akte')->getClientOriginalName();
            $request->file('akte')->move(public_path('doc'), $akteName); // Simpan ke folder 'doc'
            $data_siswa->akte_kelahiran = $akteName; // Simpan nama file ke database
        } else {
            $data_siswa->akte_kelahiran = $request->akte_lama;
        }

        // Proses unggah Rapor (file PDF)
        if ($request->hasFile('raport') && $request->file('raport')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->raport);
            $raporName = time() . '-' . $request->file('raport')->getClientOriginalName();
            $request->file('raport')->move(public_path('doc'), $raporName); // Simpan ke folder 'doc'
            $data_siswa->raport = $raporName; // Simpan nama file ke database
        } else {
            $data_siswa->raport = $request->raport_lama;
        }
        $data_siswa->keahlian = $request->keahlian;

        // Simpan data siswa ke database
        $data_siswa->save();

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $request->id_siswa)->get()[0];

        $data_sekolah_asal->id_siswa = $request->id_siswa;
        $data_sekolah_asal->tahun_lulus = $request->tahun_lulus;
        $data_sekolah_asal->nama_sekolah = $request->nama_sekolah;
        $data_sekolah_asal->desa = $request->desa_sekolah;
        $data_sekolah_asal->kecamatan = $request->kecamatan_sekolah;
        $data_sekolah_asal->kabupaten = $request->kabupaten_sekolah;
        $data_sekolah_asal->telepon_sekolah = $request->kabupaten_sekolah;
        $data_sekolah_asal->save();

        $data_ortu = OrangTua::where('id_siswa', '=', $request->id_siswa)->get()[0];
        $data_ortu->id_siswa = $request->id_siswa;
        $data_ortu->nama_ayah = $request->nama_ayah;
        $data_ortu->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $data_ortu->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $data_ortu->desa_ayah = $request->desa_ayah;
        $data_ortu->kecamatan_ayah = $request->kecamatan_ayah;
        $data_ortu->kabupaten_ayah = $request->kabupaten_ayah;
        $data_ortu->nohp_ayah = $request->nohp_ayah;
        $data_ortu->pendidikan_ayah = $request->pendidikan_ayah;
        $data_ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_ortu->penghasilan_ayah = $request->penghasilan_ayah;

        $data_ortu->nama_ibu = $request->nama_ibu;
        $data_ortu->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $data_ortu->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $data_ortu->desa_ibu = $request->desa_ibu;
        $data_ortu->kecamatan_ibu = $request->kecamatan_ibu;
        $data_ortu->kabupaten_ibu = $request->kabupaten_ibu;
        $data_ortu->nohp_ibu = $request->nohp_ibu;
        $data_ortu->pendidikan_ibu = $request->pendidikan_ibu;
        $data_ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_ortu->penghasilan_ibu = $request->penghasilan_ibu;

        $data_ortu->nama_wali = $request->nama_wali;
        $data_ortu->tempat_lahir_wali = $request->tempat_lahir_wali;
        $data_ortu->tanggal_lahir_wali = $request->tanggal_lahir_wali;
        $data_ortu->desa_wali = $request->desa_wali;
        $data_ortu->kecamatan_wali = $request->kecamatan_wali;
        $data_ortu->kabupaten_wali = $request->kabupaten_wali;
        $data_ortu->nohp_wali = $request->nohp_wali;
        $data_ortu->pendidikan_wali = $request->pendidikan_wali;
        $data_ortu->pekerjaan_wali = $request->pekerjaan_wali;
        $data_ortu->penghasilan_wali = $request->penghasilan_wali;
        $data_ortu->hubungan_wali = $request->hubungan_wali;

        $data_ortu->save();
        return redirect('/siswa/mts')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_mts(string $id)
    {
        $data_siswa = Siswa::find($id);
        if($data_siswa->foto_santri != 'users.png') {
            File::delete(public_path('img').'/'.$data_siswa->foto_santri);
        }
        if($data_siswa->kartu_keluarga != 'Blank.pdf') {
            File::delete(public_path('doc').'/'.$data_siswa->kartu_kealuarga);
        }
        if($data_siswa->akte_kelahiran != 'Blank.pdf') {
            File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
        }
        if($data_siswa->raport != 'Blank.pdf') {
            File::delete(public_path('doc').'/'.$data_siswa->raport);
        }
        $data_siswa->delete();

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get()[0];
        $data_sekolah_asal->delete();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get()[0];
        $data_orang_tua->delete();
        return redirect('/siswa/mts')->with('success', 'Data berhasil dihapus');

    }

    public function upload_data (Request $request)
    {
        $validateData = $request->validate([
            'file-data' => 'required|max:5000',
        ], [
            'file-data.required' => 'wajib upload file',
            'file-data.max' => 'ukuran file tidak boleh lebih dari 5 MB.',
        ]);

        Excel::Import(new SiswaImport, $request->file('file-data'));
        dd('done');
    }


    //siswa smp
    public function create_smp()
    {
        $data_kelas = Kelas::where('tingkat','=','2')->get();
        // dd($data_kelas);
        return view ('siswa_smp.tambah_siswa_smp', compact('data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_smp(Request $request)
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
            'hubungan_wali' => 'required',
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
            'hubungan_wali.required' => 'hubungan wali wajib diisi.',
            
        ]);

        $data_siswa = new Siswa;     

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = $request->tingkat;        
        $data_siswa->kelas = $request->kelas;
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

        return redirect('/siswa/smp')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show_smp(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_smp.detail_siswa_smp', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_smp(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_smp.edit_siswa_smp', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_smp(Request $request)
    {
        $validateData = $request->validate([
            'tingkat' => 'required',
            'foto' => 'max:5000|mimes:jpg,png,jpeg',
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
            'kk' => 'max:5000|mimes:pdf',
            'akte' => 'max:5000|mimes:pdf',
            'raport' => 'max:5000|mimes:pdf',
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
            'nohp_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',

            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'kabupaten_ibu' => 'required',
            'nohp_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',

            'nama_wali' => 'required',
            'tempat_lahir_wali' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_wali' => 'required',
            'kecamatan_wali' => 'required',
            'kabupaten_wali' => 'required',
            'nohp_wali' => 'required',
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
            'nohp_ayah.required' => 'hp ayah wajib diisi.',
            'pendidikan_ayah.required' => 'pendidikan ayah wajib diisi.',
            'pekerjaan_ayah.required' => 'pekerjaan ayah wajib diisi.',
            'penghasilan_ayah.required' => 'penghasilan ayah wajib diisi.',

            'nama_ibu.required' => 'nama ibu siswa wajib diisi.',
            'tempat_lahir_ibu.required' => 'tempat lahir ibu wajib diisi.',
            'tanggal_lahir_ibu.required' => 'tanggal lahir ibu wajib diisi.',
            'desa_ibu.required' => 'desa ibu wajib diisi.',
            'kecamatan_ibu.required' => 'kecamatan ibu wajib diisi.',
            'kabupaten_ibu.required' => 'kabupaten ibu wajib diisi.',
            'nohp_ibu.required' => 'hp ibu wajib diisi.',
            'pendidikan_ibu.required' => 'pendidikan ibu wajib diisi.',
            'pekerjaan_ibu.required' => 'pekerjaan ibu wajib diisi.',
            'penghasilan_ibu.required' => 'penghasilan ibu wajib diisi.',

            'nama_wali.required' => 'nama wali siswa wajib diisi.',
            'tempat_lahir_wali.required' => 'tempat lahir wali wajib diisi.',
            'tanggal_lahir_wali.required' => 'tanggal lahir wali wajib diisi.',
            'desa_wali.required' => 'desa wali wajib diisi.',
            'kecamatan_wali.required' => 'kecamatan wali wajib diisi.',
            'kabupaten_wali.required' => 'kabupaten wali wajib diisi.',
            'nohp_wali.required' => 'hp wali wajib diisi.',
            'pendidikan_wali.required' => 'pendidikan wali wajib diisi.',
            'pekerjaan_wali.required' => 'pekerjaan wali wajib diisi.',
            'penghasilan_wali.required' => 'penghasilan wali wajib diisi.',
            
        ]);

        $data_siswa = Siswa::where('id','=',$request->id_siswa)->get()[0];
         

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = Str::lower($request->tingkat);
        $data_siswa->kelas = $request->kelas;
        // Proses unggah foto (gambar)
        if($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto_santri == 'users.png') {
            
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        elseif ($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto != 'users.png') {
            File::delete(public_path('img').'/'.$data_siswa->foto_santri);
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        else {
            $data_siswa->foto_santri = $request->foto_lama;
        }

        // if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        //     $fotoName = time() . '-' . $request->file('foto')->getClientOriginalName();
        //     $request->file('foto')->move(public_path('img'), $fotoName); // Simpan ke folder 'img'
        //     $data_siswa->foto_santri = $fotoName; // Simpan nama file ke database
        // } else {
        //     $data_siswa->foto = 'users.png'; // Foto default jika tidak ada yang diunggah
        // }
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
            File::delete(public_path('doc').'/'.$data_siswa->kartu_keluarga);
            $kkName = time() . '-' . $request->file('kk')->getClientOriginalName();
            $request->file('kk')->move(public_path('doc'), $kkName); // Simpan ke folder 'doc'
            $data_siswa->kartu_keluarga = $kkName; // Simpan nama file ke database
        } else {
            $data_siswa->kartu_keluarga = $request->kk_lama;
        }

        // Proses unggah Akte Kelahiran (file PDF)
        if ($request->hasFile('akte') && $request->file('akte')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
            $akteName = time() . '-' . $request->file('akte')->getClientOriginalName();
            $request->file('akte')->move(public_path('doc'), $akteName); // Simpan ke folder 'doc'
            $data_siswa->akte_kelahiran = $akteName; // Simpan nama file ke database
        } else {
            $data_siswa->akte_kelahiran = $request->akte_lama;
        }

        // Proses unggah Rapor (file PDF)
        if ($request->hasFile('raport') && $request->file('raport')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->raport);
            $raporName = time() . '-' . $request->file('raport')->getClientOriginalName();
            $request->file('raport')->move(public_path('doc'), $raporName); // Simpan ke folder 'doc'
            $data_siswa->raport = $raporName; // Simpan nama file ke database
        } else {
            $data_siswa->raport = $request->raport_lama;
        }
        $data_siswa->keahlian = $request->keahlian;

        // Simpan data siswa ke database
        $data_siswa->save();

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $request->id_siswa)->get()[0];

        $data_sekolah_asal->id_siswa = $request->id_siswa;
        $data_sekolah_asal->tahun_lulus = $request->tahun_lulus;
        $data_sekolah_asal->nama_sekolah = $request->nama_sekolah;
        $data_sekolah_asal->desa = $request->desa_sekolah;
        $data_sekolah_asal->kecamatan = $request->kecamatan_sekolah;
        $data_sekolah_asal->kabupaten = $request->kabupaten_sekolah;
        $data_sekolah_asal->telepon_sekolah = $request->kabupaten_sekolah;
        $data_sekolah_asal->save();

        $data_ortu = OrangTua::where('id_siswa', '=', $request->id_siswa)->get()[0];
        $data_ortu->id_siswa = $request->id_siswa;
        $data_ortu->nama_ayah = $request->nama_ayah;
        $data_ortu->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $data_ortu->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $data_ortu->desa_ayah = $request->desa_ayah;
        $data_ortu->kecamatan_ayah = $request->kecamatan_ayah;
        $data_ortu->kabupaten_ayah = $request->kabupaten_ayah;
        $data_ortu->nohp_ayah = $request->nohp_ayah;
        $data_ortu->pendidikan_ayah = $request->pendidikan_ayah;
        $data_ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_ortu->penghasilan_ayah = $request->penghasilan_ayah;

        $data_ortu->nama_ibu = $request->nama_ibu;
        $data_ortu->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $data_ortu->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $data_ortu->desa_ibu = $request->desa_ibu;
        $data_ortu->kecamatan_ibu = $request->kecamatan_ibu;
        $data_ortu->kabupaten_ibu = $request->kabupaten_ibu;
        $data_ortu->nohp_ibu = $request->nohp_ibu;
        $data_ortu->pendidikan_ibu = $request->pendidikan_ibu;
        $data_ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_ortu->penghasilan_ibu = $request->penghasilan_ibu;

        $data_ortu->nama_wali = $request->nama_wali;
        $data_ortu->tempat_lahir_wali = $request->tempat_lahir_wali;
        $data_ortu->tanggal_lahir_wali = $request->tanggal_lahir_wali;
        $data_ortu->desa_wali = $request->desa_wali;
        $data_ortu->kecamatan_wali = $request->kecamatan_wali;
        $data_ortu->kabupaten_wali = $request->kabupaten_wali;
        $data_ortu->nohp_wali = $request->nohp_wali;
        $data_ortu->pendidikan_wali = $request->pendidikan_wali;
        $data_ortu->pekerjaan_wali = $request->pekerjaan_wali;
        $data_ortu->penghasilan_wali = $request->penghasilan_wali;
        $data_ortu->hubungan_wali = $request->hubungan_wali;

        $data_ortu->save();
        return redirect('/siswa/smp')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_smp(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->delete();
        File::delete(public_path('img').'/'.$data_siswa->foto_santri);
        File::delete(public_path('doc').'/'.$data_siswa->kartu_kealuarga);
        File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
        File::delete(public_path('doc').'/'.$data_siswa->raport);

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get()[0];
        $data_sekolah_asal->delete();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get()[0];
        $data_orang_tua->delete();
        return redirect('/siswa/smp')->with('success', 'Data berhasil dihapus');

    }


    //siswa ma
    public function create_ma()
    {
        $data_kelas = Kelas::where('tingkat','=','3')->get();
        // dd($data_kelas);
        return view ('siswa_ma.tambah_siswa_ma', compact('data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_ma(Request $request)
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
            'hubungan_wali' => 'required',
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
            'hubungan_wali.required' => 'hubungan wali wajib diisi.',
            
        ]);

        $data_siswa = new Siswa;     

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = $request->tingkat;        
        $data_siswa->kelas = $request->kelas;
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

        return redirect('/siswa/ma')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show_ma(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_ma.detail_siswa_ma', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_ma(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get();
        return view('siswa_ma.edit_siswa_ma', compact('data_siswa', 'data_sekolah_asal', 'data_orang_tua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_ma(Request $request)
    {
        $validateData = $request->validate([
            'tingkat' => 'required',
            'foto' => 'max:5000|mimes:jpg,png,jpeg',
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
            'kk' => 'max:5000|mimes:pdf',
            'akte' => 'max:5000|mimes:pdf',
            'raport' => 'max:5000|mimes:pdf',
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
            'nohp_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',

            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'kabupaten_ibu' => 'required',
            'nohp_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',

            'nama_wali' => 'required',
            'tempat_lahir_wali' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'desa_wali' => 'required',
            'kecamatan_wali' => 'required',
            'kabupaten_wali' => 'required',
            'nohp_wali' => 'required',
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
            'nohp_ayah.required' => 'hp ayah wajib diisi.',
            'pendidikan_ayah.required' => 'pendidikan ayah wajib diisi.',
            'pekerjaan_ayah.required' => 'pekerjaan ayah wajib diisi.',
            'penghasilan_ayah.required' => 'penghasilan ayah wajib diisi.',

            'nama_ibu.required' => 'nama ibu siswa wajib diisi.',
            'tempat_lahir_ibu.required' => 'tempat lahir ibu wajib diisi.',
            'tanggal_lahir_ibu.required' => 'tanggal lahir ibu wajib diisi.',
            'desa_ibu.required' => 'desa ibu wajib diisi.',
            'kecamatan_ibu.required' => 'kecamatan ibu wajib diisi.',
            'kabupaten_ibu.required' => 'kabupaten ibu wajib diisi.',
            'nohp_ibu.required' => 'hp ibu wajib diisi.',
            'pendidikan_ibu.required' => 'pendidikan ibu wajib diisi.',
            'pekerjaan_ibu.required' => 'pekerjaan ibu wajib diisi.',
            'penghasilan_ibu.required' => 'penghasilan ibu wajib diisi.',

            'nama_wali.required' => 'nama wali siswa wajib diisi.',
            'tempat_lahir_wali.required' => 'tempat lahir wali wajib diisi.',
            'tanggal_lahir_wali.required' => 'tanggal lahir wali wajib diisi.',
            'desa_wali.required' => 'desa wali wajib diisi.',
            'kecamatan_wali.required' => 'kecamatan wali wajib diisi.',
            'kabupaten_wali.required' => 'kabupaten wali wajib diisi.',
            'nohp_wali.required' => 'hp wali wajib diisi.',
            'pendidikan_wali.required' => 'pendidikan wali wajib diisi.',
            'pekerjaan_wali.required' => 'pekerjaan wali wajib diisi.',
            'penghasilan_wali.required' => 'penghasilan wali wajib diisi.',
            
        ]);

        $data_siswa = Siswa::where('id','=',$request->id_siswa)->get()[0];
         

       // Input data lainnya ke tabel siswa
        $data_siswa->tingkat = Str::lower($request->tingkat);
        $data_siswa->kelas = $request->kelas;
        // Proses unggah foto (gambar)
        if($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto_santri == 'users.png') {
            
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        elseif ($request->hasFile('foto') && $request->file('foto')->isValid() && $data_siswa->foto != 'users.png') {
            File::delete(public_path('img').'/'.$data_siswa->foto_santri);
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_siswa->foto_santri = $foto;
        }
        else {
            $data_siswa->foto_santri = $request->foto_lama;
        }

        // if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        //     $fotoName = time() . '-' . $request->file('foto')->getClientOriginalName();
        //     $request->file('foto')->move(public_path('img'), $fotoName); // Simpan ke folder 'img'
        //     $data_siswa->foto_santri = $fotoName; // Simpan nama file ke database
        // } else {
        //     $data_siswa->foto = 'users.png'; // Foto default jika tidak ada yang diunggah
        // }
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
            File::delete(public_path('doc').'/'.$data_siswa->kartu_keluarga);
            $kkName = time() . '-' . $request->file('kk')->getClientOriginalName();
            $request->file('kk')->move(public_path('doc'), $kkName); // Simpan ke folder 'doc'
            $data_siswa->kartu_keluarga = $kkName; // Simpan nama file ke database
        } else {
            $data_siswa->kartu_keluarga = $request->kk_lama;
        }

        // Proses unggah Akte Kelahiran (file PDF)
        if ($request->hasFile('akte') && $request->file('akte')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
            $akteName = time() . '-' . $request->file('akte')->getClientOriginalName();
            $request->file('akte')->move(public_path('doc'), $akteName); // Simpan ke folder 'doc'
            $data_siswa->akte_kelahiran = $akteName; // Simpan nama file ke database
        } else {
            $data_siswa->akte_kelahiran = $request->akte_lama;
        }

        // Proses unggah Rapor (file PDF)
        if ($request->hasFile('raport') && $request->file('raport')->isValid()) {
            File::delete(public_path('doc').'/'.$data_siswa->raport);
            $raporName = time() . '-' . $request->file('raport')->getClientOriginalName();
            $request->file('raport')->move(public_path('doc'), $raporName); // Simpan ke folder 'doc'
            $data_siswa->raport = $raporName; // Simpan nama file ke database
        } else {
            $data_siswa->raport = $request->raport_lama;
        }
        $data_siswa->keahlian = $request->keahlian;

        // Simpan data siswa ke database
        $data_siswa->save();

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $request->id_siswa)->get()[0];

        $data_sekolah_asal->id_siswa = $request->id_siswa;
        $data_sekolah_asal->tahun_lulus = $request->tahun_lulus;
        $data_sekolah_asal->nama_sekolah = $request->nama_sekolah;
        $data_sekolah_asal->desa = $request->desa_sekolah;
        $data_sekolah_asal->kecamatan = $request->kecamatan_sekolah;
        $data_sekolah_asal->kabupaten = $request->kabupaten_sekolah;
        $data_sekolah_asal->telepon_sekolah = $request->kabupaten_sekolah;
        $data_sekolah_asal->save();

        $data_ortu = OrangTua::where('id_siswa', '=', $request->id_siswa)->get()[0];
        $data_ortu->id_siswa = $request->id_siswa;
        $data_ortu->nama_ayah = $request->nama_ayah;
        $data_ortu->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $data_ortu->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        $data_ortu->desa_ayah = $request->desa_ayah;
        $data_ortu->kecamatan_ayah = $request->kecamatan_ayah;
        $data_ortu->kabupaten_ayah = $request->kabupaten_ayah;
        $data_ortu->nohp_ayah = $request->nohp_ayah;
        $data_ortu->pendidikan_ayah = $request->pendidikan_ayah;
        $data_ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_ortu->penghasilan_ayah = $request->penghasilan_ayah;

        $data_ortu->nama_ibu = $request->nama_ibu;
        $data_ortu->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $data_ortu->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        $data_ortu->desa_ibu = $request->desa_ibu;
        $data_ortu->kecamatan_ibu = $request->kecamatan_ibu;
        $data_ortu->kabupaten_ibu = $request->kabupaten_ibu;
        $data_ortu->nohp_ibu = $request->nohp_ibu;
        $data_ortu->pendidikan_ibu = $request->pendidikan_ibu;
        $data_ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_ortu->penghasilan_ibu = $request->penghasilan_ibu;

        $data_ortu->nama_wali = $request->nama_wali;
        $data_ortu->tempat_lahir_wali = $request->tempat_lahir_wali;
        $data_ortu->tanggal_lahir_wali = $request->tanggal_lahir_wali;
        $data_ortu->desa_wali = $request->desa_wali;
        $data_ortu->kecamatan_wali = $request->kecamatan_wali;
        $data_ortu->kabupaten_wali = $request->kabupaten_wali;
        $data_ortu->nohp_wali = $request->nohp_wali;
        $data_ortu->pendidikan_wali = $request->pendidikan_wali;
        $data_ortu->pekerjaan_wali = $request->pekerjaan_wali;
        $data_ortu->penghasilan_wali = $request->penghasilan_wali;
        $data_ortu->hubungan_wali = $request->hubungan_wali;

        $data_ortu->save();
        return redirect('/siswa/ma')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_ma(string $id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->delete();
        File::delete(public_path('img').'/'.$data_siswa->foto_santri);
        File::delete(public_path('doc').'/'.$data_siswa->kartu_kealuarga);
        File::delete(public_path('doc').'/'.$data_siswa->akte_kelahiran);
        File::delete(public_path('doc').'/'.$data_siswa->raport);

        $data_sekolah_asal = SekolahAsal::where('id_siswa', '=', $id)->get()[0];
        $data_sekolah_asal->delete();
        $data_orang_tua = OrangTua::where('id_siswa', '=', $id)->get()[0];
        $data_orang_tua->delete();
        return redirect('/siswa/ma')->with('success', 'Data berhasil dihapus');

    }
}
