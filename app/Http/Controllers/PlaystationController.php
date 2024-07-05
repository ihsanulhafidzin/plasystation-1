<?php
// app/Http/Controllers/PlaystationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;

class PlaystationController extends Controller
{
    public function index()
    {
        $playstations = Playstation::all();
        return view('playstations.index', compact('playstations'));
    }

    public function create()
    {
        return view('playstations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|integer',
        ]);

        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        Playstation::create([
            'merk' => $request->merk,
            'foto' => $imageName,
            'harga' => $request->harga,
        ]);

        return redirect()->route('playstations.index')
            ->with('success', 'Playstation created successfully');
    }

    public function show()
    {
        $playstations = Playstation::all();
        return view('playstations.show', compact('playstations'));
    }

    public function edit($id)
    {
        $playstation = Playstation::find($id);
        return view('playstations.edit', compact('playstation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required',
            'harga' => 'required|integer',
        ]);

        $playstation = Playstation::find($id);
        $playstation->update([
            'merk' => $request->merk,
            'harga' => $request->harga,
        ]);

        return redirect()->route('playstations.index')
            ->with('success', 'Playstation updated successfully');
    }

    public function destroy($id)
    {
        $playstation = Playstation::find($id);
        $playstation->delete();

        return redirect()->route('playstations.index')
            ->with('success', 'Playstation deleted successfully');
    }
}
