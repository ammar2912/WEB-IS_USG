<?php

namespace App\Http\Controllers;

use App\Models\Sheep;
use Illuminate\Http\Request;

class SheepController extends Controller
{
    public function index()
    {
        $sheep = Sheep::orderBy('id', 'desc')->get();
        return view('readSheep', compact('sheep'));
    }

    public function create()
    {
        return view('createSheep');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_domba' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Sheep::create($request->all());

        return redirect()->route('sheep.index')
            ->with('success', 'Sheep created successfully.');
    }

    public function show(Sheep $sheep)
    {
        return view('readSheep', compact('sheep'));
    }

    public function edit(Sheep $sheep)
    {
        return view('editSheep', compact('sheep'));
    }

    public function update(Request $request, Sheep $sheep)
    {
        $request->validate([
            'id_domba' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $sheep->update($request->all());

        return redirect()->route('sheep.index')
            ->with('success', 'Sheep updated successfully.');
    }

    public function destroy(Sheep $sheep)
    {
        $sheep->delete();

        return redirect()->route('sheep.index')
            ->with('success', 'Sheep deleted successfully.');
    }
}