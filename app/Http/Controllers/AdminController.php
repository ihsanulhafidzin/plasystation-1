<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Playstation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::with('playstation')->get();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        $playstations = Playstation::all();
        return view('admins.create', compact('playstations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required',
            'playstation_id' => 'required|exists:playstations,id',
        ]);

        $imageName = time() . '.' . $request->foto_ktp->extension();
        $request->foto_ktp->move(public_path('images'), $imageName);

        Admin::create([
            'nama' => $request->nama,
            'foto_ktp' => $imageName,
            'alamat' => $request->alamat,
            'playstation_id' => $request->playstation_id,
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin created successfully');
    }

    public function show($id)
    {
        $admin = Admin::with('playstation')->find($id);
        return view('admins.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $playstations = Playstation::all();
        return view('admins.edit', compact('admin', 'playstations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'playstation_id' => 'required|exists:playstations,id',
        ]);

        $admin = Admin::find($id);
        $admin->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'playstation_id' => $request->playstation_id,
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Admin deleted successfully');
    }
}
