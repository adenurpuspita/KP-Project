<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua data berita
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }
    public function catalog()
    {
        // Ambil semua berita dari database
        $beritas = Berita::all();
        
        // Kembalikan tampilan dengan data berita
        return view('berita.catalog', compact('beritas'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan data berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $berita->gambar = $fileName;
        }

        $berita->save();

        return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan');
    }

    // Menampilkan data berita berdasarkan ID
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    // Menampilkan form untuk mengedit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    // Mengupdate data berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $berita->gambar = $fileName;
        }

        $berita->save();

        return redirect()->route('berita')->with('success', 'Berita berhasil diupdate');
    }

    // Menghapus data berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            $imagePath = public_path('images/' . $berita->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
