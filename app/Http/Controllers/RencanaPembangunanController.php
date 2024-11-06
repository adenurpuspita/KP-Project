<?php

namespace App\Http\Controllers;

use App\Models\RencanaPembangunan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RencanaPembangunanController extends Controller
{
    /**
     * Tampilkan daftar rencana pembangunan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rencanaPembangunan = RencanaPembangunan::all();
        return view('Rencana.index', compact('rencanaPembangunan'));
    }

    /**
     * Tampilkan form untuk membuat rencana pembangunan baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Rencana.create');
    }

    /**
     * Simpan data rencana pembangunan baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Simpan file yang diunggah
        $filePath = $request->file('file')->store('rencana_pembangunan', 'public');

        // Buat rencana pembangunan baru
        RencanaPembangunan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'file' => $filePath,
        ]);

        return redirect()->route('Rencana.index')->with('success', 'Rencana Pembangunan berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail rencana pembangunan.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    // public function show($id)
    // {
    //     $rencanaPembangunan = RencanaPembangunan::findOrFail($id);
    //     return view('rencana_pembangunan.show', compact('rencanaPembangunan'));
    // }

    /**
     * Tampilkan form untuk mengedit rencana pembangunan.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $rencanaPembangunan = RencanaPembangunan::findOrFail($id);
        return view('rencana_pembangunan.edit', compact('rencanaPembangunan'));
    }

    /**
     * Perbarui data rencana pembangunan yang ada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $rencanaPembangunan = RencanaPembangunan::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            // Hapus file lama
            if ($rencanaPembangunan->file && Storage::disk('public')->exists($rencanaPembangunan->file)) {
                Storage::disk('public')->delete($rencanaPembangunan->file);
            }

            // Simpan file baru
            $filePath = $request->file('file')->store('rencana_pembangunan', 'public');
            $rencanaPembangunan->file = $filePath;
        }

        // Perbarui data lainnya
        $rencanaPembangunan->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('rencana_pembangunan.index')->with('success', 'Rencana Pembangunan berhasil diperbarui.');
    }

    /**
     * Hapus data rencana pembangunan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $rencanaPembangunan = RencanaPembangunan::findOrFail($id);

        // Hapus file terkait jika ada
        if ($rencanaPembangunan->file && Storage::disk('public')->exists($rencanaPembangunan->file)) {
            Storage::disk('public')->delete($rencanaPembangunan->file);
        }

        $rencanaPembangunan->delete();

        return redirect()->route('rencana_pembangunan.index')->with('success', 'Rencana Pembangunan berhasil dihapus.');
    }
}
