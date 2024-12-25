<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_guru = Guru::all();

        return view('guru.guru', compact('data_guru'));
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
            'foto_guru' => 'max:5000|mimes:jpg,png,jpeg',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tmt' => 'required',
        ], [
            'foto_guru.max' => 'ukuran foto_guru tidak boleh lebih dari 5 MB.',
            'foto_guru.mimes' => 'Format foto_guru harus berupa jpg, png, atau jpeg.',
            'nama.required' => 'Nama wajib diisi.',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'penulis.required' => 'Tanggal wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin  wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi',
            'tmt.required' => 'TMT wajib diisi',
        ]);

        $data_guru = new Guru;

        if($request->hasFile('foto_guru') && $request->file('foto_guru')->isValid()) {
            $foto_guru = $request->file('foto_guru')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto_guru')->extension();
            $request->foto_guru->move(public_path('img'), $foto_guru);
            $data_guru->foto_guru = $foto_guru;
        } else {
            $data_guru->foto_guru = 'users.png';
        }

        $data_guru->nama = $request->nama;
        $data_guru->tempat_lahir = $request->tempat_lahir;
        $data_guru->tanggal_lahir = $request->tanggal_lahir;
        $data_guru->jenis_kelamin = $request->jenis_kelamin;
        $data_guru->alamat = $request->alamat;
        $data_guru->tmt = $request->tmt;

        $data_guru->save();
        return redirect('/guru')->with('success', 'Data Berhasil Diatambahkan');

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
        $data_guru = Guru::find($id);
        return view('guru.edit_guru', compact('data_guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'foto_guru' => 'max:5000|mimes:jpg,png,jpeg',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tmt' => 'required',
        ], [
            'foto_guru.max' => 'ukuran foto_guru tidak boleh lebih dari 5 MB.',
            'foto_guru.mimes' => 'Format foto_guru harus berupa jpg, png, atau jpeg.',
            'nama.required' => 'Nama wajib diisi.',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'penulis.required' => 'Tanggal wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin  wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi',
            'tmt.required' => 'TMT wajib diisi',
        ]);

        $data_guru = Guru::find($request->id);
        if($request->hasFile('foto_guru') && $request->file('foto_guru')->isValid() && $data_guru->foto_guru == 'users.png') {
            
            $foto_guru = $request->file('foto_guru')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto_guru')->extension();
            $request->foto_guru->move(public_path('img'), $foto_guru);
            $data_guru->foto_guru = $foto_guru;
        }
        elseif ($request->hasFile('foto_guru') && $request->file('foto_guru')->isValid() && $data_guru->foto_guru != 'users.png') {
            File::delete(public_path('img').'/'.$data_guru->foto_guru);
            $foto_guru = $request->file('foto_guru')->getClientOriginalName() . '-' . time() . '.' . $request->file('foto_guru')->extension();
            $request->foto_guru->move(public_path('img'), $foto_guru);
            $data_guru->foto_guru = $foto_guru;
        }
        else {
            $data_guru->foto_guru = $request->foto_lama;
        }

        $data_guru->nama = $request->nama;
        $data_guru->tempat_lahir = $request->tempat_lahir;
        $data_guru->tanggal_lahir = $request->tanggal_lahir;
        $data_guru->jenis_kelamin = $request->jenis_kelamin;
        $data_guru->alamat = $request->alamat;
        $data_guru->tmt = $request->tmt;

        $data_guru->save();
        return redirect('/guru')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_guru = Guru::find($id);
        $data_guru->delete();
        File::delete(public_path('img').'/'.$data_guru->foto_guru);
        return redirect('/guru')->with('success', 'Data Berhasil Dihapus');
    }
}
