<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Nama berita wajib diisi.',
            'email.required' => 'Email penulis wajib diisi.',
            'password.required' => 'Password berita wajib diisi.',
        ]);

        $data_user = new User;
        $data_user->name = $request->name;
        $data_user->email = $request->email;
        $data_user->password = Hash::make($request->password);
        $data_user->save();
        return redirect ('/user/tambah')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    public function proses_login(Request $request) 
    {
        $validateData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $data_login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data_login)) {
            // $user = Auth::user();
            return redirect ('/dashboard')->with('success', 'Anda berhasil login');
        } else {
            return redirect ('/login')->with('failed', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success_logout', 'Anda berhasil logout');
    }

    public function proses_register (Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email penulis wajib diisi.',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password berita wajib diisi.',
            'password.min' => 'Password harus mengandung minimal 8 karakter',
        ]);

        $data_user = new User;
        $data_user->name = $request->name;
        $data_user->email = $request->email;
        $data_user->password = Hash::make($request->password);
        $data_user->save();

        return redirect ('/login')->with('register_success', 'Anda berhasil registrasi akun');
    }

    public function edit_password() 
    {
        return view('edit_password');
    }

    public function update_password(Request $request) 
    {
        $validateData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'Password lama wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus mengandung minimal 8 karakter',
            'password.confirmed' => 'Password konfirmasi tidak sama',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('ganti_sukses', 'Password berhasil diganti');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password lama yang anda masukkan salah',
        ]);
    }

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
