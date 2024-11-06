<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function catalog()
    {
        $berita = Berita::all();
        return view('katalog', compact('berita'));
    }
    public function ShowKatalog($id)
    {
        $berita = Berita::findOrFail($id);
        return view('ShowKatalog', compact('berita'));
    }
}
