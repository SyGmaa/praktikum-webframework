<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::with('fakultas')->get();
        return view('Prodi.indexprodi', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('Prodi.createprodi', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fakultas_id' => 'required|exists:fakultas,id',
            'nama_prodi' => 'required|string|max:255',
            'kode_prodi' => 'required|string|max:255|unique:prodi',
            'jenjang_pendidikan' => 'required|in:D3,D4,S1,S2,S3',
        ]);

        Prodi::create($request->only(['fakultas_id', 'nama_prodi', 'kode_prodi', 'jenjang_pendidikan']));

        return redirect()->route('prodi.index')->with('success', 'Prodi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::with('fakultas')->findOrFail($id);
        return view('Prodi.showprodi', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $fakultas = Fakultas::all();
        return view('Prodi.editprodi', compact('prodi', 'fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fakultas_id' => 'required|exists:fakultas,id',
            'nama_prodi' => 'required|string|max:255',
            'kode_prodi' => 'required|string|max:255|unique:prodi,kode_prodi,' . $id,
            'jenjang_pendidikan' => 'required|in:D3,D4,S1,S2,S3',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update($request->only(['fakultas_id', 'nama_prodi', 'kode_prodi', 'jenjang_pendidikan']));

        return redirect()->route('prodi.index')->with('success', 'Prodi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Prodi deleted successfully.');
    }
}
