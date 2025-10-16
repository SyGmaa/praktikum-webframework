<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::withCount('prodi')->get();
        return view('Fakultas.indexfakultas', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Fakultas.createfakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'kode_fakultas' => 'required|string|max:255|unique:fakultas',
        ]);

        Fakultas::create($request->only(['nama_fakultas', 'kode_fakultas']));

        return redirect()->route('fakultas.index')->with('success', 'Fakultas created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fakultas = Fakultas::with('prodi')->findOrFail($id);
        return view('Fakultas.showfakultas', compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view('Fakultas.editfakultas', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'kode_fakultas' => 'required|string|max:255|unique:fakultas,kode_fakultas,' . $id,
        ]);

        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update($request->only(['nama_fakultas', 'kode_fakultas']));

        return redirect()->route('fakultas.index')->with('success', 'Fakultas updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        return redirect()->route('fakultas.index')->with('success', 'Fakultas deleted successfully.');
    }
}
