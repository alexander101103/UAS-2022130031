<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::all();
        return view('polis.index', compact('polis'));
    }

    public function create()
    {
        return view('polis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        Poli::create($request->all());

        return redirect()->route('polis.index')->with('success', 'Poli created successfully.');
    }

    public function show(Poli $poli)
    {
        return view('polis.show', compact('poli'));
    }

    public function edit(Poli $poli)
    {
        return view('polis.edit', compact('poli'));
    }

    public function update(Request $request, Poli $poli)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        $poli->update($request->all());

        return redirect()->route('polis.index')->with('success', 'Poli updated successfully.');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete();

        return redirect()->route('polis.index')->with('success', 'Poli deleted successfully.');
    }
}
