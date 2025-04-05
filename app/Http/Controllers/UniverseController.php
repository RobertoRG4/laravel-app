<?php
namespace App\Http\Controllers;

use App\Models\Universo;
use Illuminate\Http\Request;

class UniverseController extends Controller{
    public function index(){
        $universes = Universo::all();
        return view('universes.index', compact('universes')); 
    }

    public function create(){
        return view('universes.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Universo::create([
            'name' => $request->name,
        ]);
        return redirect()->route('universes.index');
    }
    public function edit($id){
        $universe = Universo::findOrFail($id);
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $universe = Universo::findOrFail($id);
        $universe->name = $request->name;
        $universe->save();

        return redirect()->route('universes.index');
    }

    public function show($id){
        $universe = Universo::findOrFail($id);
        return view('universes.show', compact('universe'));
    }

    public function destroy($id){
        $universe = Universo::findOrFail($id); 
        $universe->delete(); 
        return redirect()->route('universes.index')->with('success', 'Universe deleted successfully');
    }
}

