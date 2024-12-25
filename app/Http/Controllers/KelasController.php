<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('kelas.kelas', compact('data_kelas'));
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
        $data_kelas = new Kelas;
        $tingkat = Str::lower($request->tingkat);
        $data_kelas->tingkat = $tingkat;
        $data_kelas->kelas = $request->kelas;
        $data_kelas->save();
        return redirect ('/kelas')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_kelas = Kelas::find($id);
        return view ('kelas.edit_kelas', compact('data_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'tingkat' => 'required',
            'kelas' => 'required',
        ], [
            'tingkat.required' => 'tingkat berita wajib diisi.',
            'kelas.required' => 'Kelas wajib diisi.',
        ]);

        $data_kelas = Kelas::find($request->id);
        $data_kelas->tingkat = $request->tingkat;
        $data_kelas->kelas = $request->kelas;
        $data_kelas->save();
        return redirect ('/kelas')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_kelas = Kelas::find($id);
        $data_kelas->delete();
        return redirect ('/kelas')->with('success', 'Data berhasil dihapus');
    }
}
