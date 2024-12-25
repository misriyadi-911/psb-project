<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/user/tambah', function(){
        return view("tambah_user");
    });
    Route::post('/user/tambah', [UsersController::class, 'store']);
    Route::get("/dashboard", function(){
        return view ("dashboard");
    });
    Route::get("/siswa/mts", [SiswaController::class, 'index_mts']);
    Route::get("/siswa/mts/tambah", [SiswaController::class, 'create_mts']);
    Route::post("/siswa/mts/tambah", [SiswaController::class, 'store_mts']);
    Route::get("/siswa/mts/edit/{id}", [SiswaController::class, 'edit_mts']);
    Route::post("/siswa/mts/update", [SiswaController::class, 'update_mts']);
    Route::post("/siswa/mts/update", [SiswaController::class, 'update_mts']);
    Route::get("/siswa/mts/hapus/{id}", [SiswaController::class, 'destroy_mts']);
    Route::get("/siswa/mts/detail/{id}", [SiswaController::class, 'show_mts']);
    Route::get("/siswa/form-upload", function(){
        return view('upload_siswa');
    });
    
    Route::post("/siswa/upload", [ImportController::class, 'upload_data']);
    Route::get("/siswa/export/{tingkat}/{kelas}",[SiswaController::class, 'export']);
    Route::get("/siswa/download-data/{id}",[SiswaController::class, 'download_data']);
    
    Route::get("/siswa/smp", [SiswaController::class, 'index_smp']);
    Route::get("/siswa/smp/tambah", [SiswaController::class, 'create_smp']);
    Route::post("/siswa/smp/tambah", [SiswaController::class, 'store_smp']);
    Route::get("/siswa/smp/edit/{id}", [SiswaController::class, 'edit_smp']);
    Route::post("/siswa/smp/update", [SiswaController::class, 'update_smp']);
    Route::post("/siswa/smp/update", [SiswaController::class, 'update_smp']);
    Route::get("/siswa/smp/hapus/{id}", [SiswaController::class, 'destroy_smp']);
    Route::get("/siswa/smp/detail/{id}", [SiswaController::class, 'show_smp']);
    
    Route::get("/siswa/ma", [SiswaController::class, 'index_ma']);
    Route::get("/siswa/ma/tambah", [SiswaController::class, 'create_ma']);
    Route::post("/siswa/ma/tambah", [SiswaController::class, 'store_ma']);
    Route::get("/siswa/ma/edit/{id}", [SiswaController::class, 'edit_ma']);
    Route::post("/siswa/ma/update", [SiswaController::class, 'update_ma']);
    Route::post("/siswa/ma/update", [SiswaController::class, 'update_ma']);
    Route::get("/siswa/ma/hapus/{id}", [SiswaController::class, 'destroy_ma']);
    Route::get("/siswa/ma/detail/{id}", [SiswaController::class, 'show_ma']);
    
    Route::get("/guru", [GuruController::class, 'index']);
    Route::get("/guru/tambah", function(){
        return view ("guru.tambah_guru");
    });
    Route::post("guru/tambah", [GuruController::class, 'store']);
    Route::get("/guru/edit/{id}", [GuruController::class, 'edit']);
    Route::post("/guru/update/", [GuruController::class, 'update']);
    Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);
    
    Route::get("/berita",[BeritaController::class, 'index']);
    Route::get("/berita/tambah", function(){
        return view ("berita.tambah_berita");
    });
    Route::post("/berita/tambah", [BeritaController::class, 'store']);
    Route::get("/berita/hapus/{id}", [BeritaController::class, 'destroy']);
    Route::get("/berita/edit/{id}", [BeritaController::class, 'edit']);
    Route::get("/berita/detail/{id}", [BeritaController::class, 'show']);
    Route::post("/berita/update/", [BeritaController::class, 'update']);
    
    Route::get("/kelas",[KelasController::class, 'index']);
    Route::get("/kelas/tambah", function(){
        return view ("kelas.tambah_kelas");
    });
    Route::post("/kelas/tambah", [KelasController::class, 'store']);
    Route::get("/kelas/hapus/{id}", [KelasController::class, 'destroy']);
    Route::get("/kelas/edit/{id}", [KelasController::class, 'edit']);
    Route::post("/kelas/update/", [KelasController::class, 'update']);

    Route::get("/password/edit", [UsersController::class, 'edit_password']);
    Route::post("/password/update", [UsersController::class, 'update_password'])->name('password.update');
});

Route::get('/login', [UsersController::class, 'index'])->name('login');
Route::post('/proses_login', [UsersController::class, 'proses_login'])->name(('proses_login'));
Route::get('/logout', [UsersController::class, 'logout'])->name(('logout'));
Route::get('/register', function(){
    return view ('auth.register');
});
Route::post('/proses_register', [UsersController::class, 'proses_register'])->name(('proses_register'));


Route::get("/berita/detail/{id}", [PageController::class, 'detail_berita']);
Route::get("/", [PageController::class, 'index']);
Route::get("/profile", [PageController::class, 'profile']);
Route::get("/detail", [PageController::class, 'detail']);
Route::get("/daftar", function(){
    return view ("form");
});
Route::post('/daftar/simpan',[FormulirController::class, 'store']);

