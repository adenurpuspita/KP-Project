<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    // Menampilkan semua data berita
    public function index()
    {
        $agendas = Agenda::all();
        return view('agenda.index', compact('agendas'));
    }
    public function catalog()
    {
        // Ambil semua agenda dari database
        $agendas = Agenda::all();
        
        // Kembalikan tampilan dengan data agenda
        return view('agenda.catalog', compact('agendas'));
    }

    // Menampilkan form untuk membuat agenda baru
    public function create()
    {
        return view('agenda.create');
    }

    // Menyimpan data agenda baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $agenda = new Agenda;
        $agenda->judul = $request->judul;
        $agenda->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $agenda->gambar = $fileName;
        }

        $agenda->save();

        return redirect()->route('agenda')->with('success', 'agenda berhasil ditambahkan');
    }

    // Menampilkan data agenda berdasarkan ID
    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agenda.showUser', compact('agenda'));
    }
    public function showAdmin($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agenda.show', compact('agenda'));
    }

    // Menampilkan form untuk mengedit agenda
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agenda.edit', compact('agenda'));
    }

    // Mengupdate data agenda
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->judul = $request->judul;
        $agenda->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $agenda->gambar = $fileName;
        }

        $agenda->save();

        return redirect()->route('agenda')->with('success', 'agenda berhasil diupdate');
    }

    // Menghapus data agenda
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);

        if ($agenda->gambar) {
            $imagePath = public_path('images/' . $agenda->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $agenda->delete();

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus');
    }
}
