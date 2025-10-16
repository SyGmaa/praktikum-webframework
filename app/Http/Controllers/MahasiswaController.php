<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with(['prodi', 'dosenPA'])->get();
        return view('Mahasiswa.indexmahasiswa', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        $dosens = Dosen::all();
        return view('Mahasiswa.createmahasiswa', compact('prodis', 'dosens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:255|unique:mahasiswa',
            'nama_mahasiswa' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'alamat' => 'required|string',
            'email' => 'required|email|unique:mahasiswa',
            'status_mahasiswa' => 'required|in:Aktif,Tidak Aktif,Cuti,Lulus',
            'id_prodi' => 'required|exists:prodi,id',
            'nidn_pa' => 'nullable|exists:dosen,nidn',
        ]);

        Mahasiswa::create($request->only(['nim', 'nama_mahasiswa', 'angkatan', 'alamat', 'email', 'status_mahasiswa', 'id_prodi', 'nidn_pa']));

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nim)
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'dosenPA'])->findOrFail($nim);
        return view('Mahasiswa.showmahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $prodis = Prodi::all();
        $dosens = Dosen::all();
        return view('Mahasiswa.editmahasiswa', compact('mahasiswa', 'prodis', 'dosens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $request->validate([
            'nim' => 'required|string|max:255|unique:mahasiswa,nim,' . $nim . ',nim',
            'nama_mahasiswa' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'alamat' => 'required|string',
            'email' => 'required|email|unique:mahasiswa,email,' . $nim . ',nim',
            'status_mahasiswa' => 'required|in:Aktif,Tidak Aktif,Cuti,Lulus',
            'id_prodi' => 'required|exists:prodi,id',
            'nidn_pa' => 'nullable|exists:dosen,nidn',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->only(['nim', 'nama_mahasiswa', 'angkatan', 'alamat', 'email', 'status_mahasiswa', 'id_prodi', 'nidn_pa']));

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa deleted successfully.');
    }
}
