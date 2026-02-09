<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

   public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim', 
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah' => 'required',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'matakuliah' => $request->matakuliah,
        ]);

        return redirect()->route('mahasiswa.index')
                     ->with('success', 'Mahasiswa berhasil ditambahkan');
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
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah' => 'required',
        ]);

        Mahasiswa::where('nim', $nim)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'matakuliah' => $request->matakuliah,
        ]);

        return redirect()->route('mahasiswa.index')
                     ->with('success', 'Data mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nim)
    {
        Mahasiswa::where('nim', $nim)->delete();

        return redirect()->route('mahasiswa.index')
                     ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
