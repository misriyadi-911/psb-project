<?php

namespace App\Http\Controllers;

use App\Imports\SiswaImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function upload_data (Request $request)
    {
        $validateData = $request->validate([
            'file-data' => 'required|max:5000',
        ], [
            'file-data.required' => 'wajib upload file',
            'file-data.max' => 'ukuran file tidak boleh lebih dari 5 MB.',
        ]);

        Excel::Import(new SiswaImport, $request->file('file-data'));
        return redirect ('/siswa/form-upload')->with('success', 'Data berhasil diimport');
    }
}
