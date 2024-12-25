<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_berita = Berita::all();
        return view('berita.berita', compact('data_berita'));
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
            'foto' => 'required|max:5000|mimes:jpg,png,jpeg',
            'judul' => 'required',
            'tanggal_terbit' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
        ], [
            'foto.required' => 'foto wajib diisi',
            'foto.max' => 'ukuran foto tidak boleh lebih dari 5 MB.',
            'foto.mimes' => 'Format foto harus berupa jpg, png, atau jpeg.',
            'judul.required' => 'Judul berita wajib diisi.',
            'tanggal_terbit.required' => 'Tanggal terbit wajib diisi.',
            'penulis.required' => 'Nama penulis wajib diisi.',
            'isi.required' => 'Isi berita wajib diisi.',
        ]);

        $data_berita = new Berita;

        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_berita->foto = $foto;
        } else {
            $data_berita->foto = 'users.png';
        }

        $data_berita->judul = $request->judul;
        $data_berita->tanggal_terbit = $request->tanggal_terbit;
        $data_berita->penulis = $request->penulis;
        $data_berita->isi = $request->isi;

        $data_berita->save();
        return redirect('/berita')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_berita = Berita::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_berita = Berita::find($id);
        // dd($data_berita);
        return view ('berita.edit_berita', compact('data_berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'foto' => 'max:5000|mimes:jpg,png,jpeg',
            'judul' => 'required',
            'tanggal_terbit' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
        ], [
            'foto.max' => 'ukuran foto tidak boleh lebih dari 5 MB.',
            'foto.mimes' => 'Format foto harus berupa jpg, png, atau jpeg.',
            'judul.required' => 'Judul berita wajib diisi.',
            'tanggal_terbit.required' => 'Tanggal terbit wajib diisi.',
            'penulis.required' => 'Nama penulis wajib diisi.',
            'isi.required' => 'Isi berita wajib diisi.',
        ]);
        $data_berita = Berita::find($request->id);
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
            File::delete(public_path('img').'/'.$data_berita->foto);
            $foto = $request->file('foto')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto')->extension();
            $request->foto->move(public_path('img'), $foto);
            $data_berita->foto = $foto;
            
        } else {
            $data_berita->foto = $request->foto_lama;
        }

        $data_berita->judul = $request->judul;
        $data_berita->tanggal_terbit = $request->tanggal_terbit;
        $data_berita->penulis = $request->penulis;
        $data_berita->isi = $request->isi;

        $data_berita->save();
        
        return redirect('/berita')->with('edit_sukses', 'Data Berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_berita = Berita::find($id);
        $data_berita->delete();

        File::delete(public_path('img').'/'.$data_berita->foto);
        return redirect('berita.berita')->with('hapus_sukses', 'Data berhasil dihapus');
    }
}
