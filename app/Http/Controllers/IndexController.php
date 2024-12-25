<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Berita;

class IndexController extends Controller
{
    public function berita () {
        $data_berita = Berita::all();
        return view('index', compact('data_berita'));
    }
}
