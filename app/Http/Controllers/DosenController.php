<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('Dosen.indexdosen', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = \App\Models\Prodi::all(); // Assuming Prodi model exists
        return view('Dosen.createdosen', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|string|max:255',
            'id_prodi' => 'required|exists:prodi,id',
            'nama_dosen' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telepon' => 'required|string|max:255',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dosen = Dosen::with('mahasiswa')->findOrFail($id);
        return view('Dosen.showdosen', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        $prodis = \App\Models\Prodi::all();
        return view('Dosen.editdosen', compact('dosen', 'prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $request->validate([
            'nidn' => 'required|string|max:255',
            'id_prodi' => 'required|exists:prodi,id',
            'nama_dosen' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telepon' => 'required|string|max:255',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen deleted successfully.');
    }
}
