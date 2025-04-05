<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Superhero;
use App\Models\Universo;

use Illuminate\Http\Request;

class SuperHerosController extends Controller{
    public function index(){
        $superheros = Superhero::select('id', 'name', 'real_name', 'publisher', 'picture', 'genero_id', 'universo_id')->get();
        return view('superheroes.index', compact('superheros'));
    }
    public function create(){
        $genders = Gender::select("id", "name")->get();
        $universes = Universo::select("id", "name")->get();
        return view("superheroes.create", compact("genders", "universes"));
    }

    public function store(Request $request){
        $request->validate([
            'gender_id' => 'required|exists:generos,id',
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'universe_id' => 'required|exists:universos,id', 
    ]);

    Superhero::create([
        'genero_id' => $request->gender_id,
        'name' => $request->name,
        'universo_id' => $request->universe_id,
        'real_name' => $request->real_name, 
        'picture' => $request->picture, 
        'publisher' => $request->publisher,     
    ]);
        return redirect()->route('superheroes.index');
    }
    public function show(string $id){
        $superhero = Superhero::find($id); 
        if (!$superhero) {
            return redirect()->route('superheroes.index')->with('error', 'Superhero not found.');
        }
        return view('superheroes.show', compact('superhero'));
    }
    
    public function edit($id){
        $superhero = Superhero::findOrFail($id);
        $genders = Gender::all();
        $universes = Universo::all();
        return view('superheroes.edit', compact('superhero', 'genders', 'universes'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'gender_id' => 'required|exists:generos,id',
            'universe_id' => 'required|exists:universos,id',
            'picture' => 'nullable|string|max:255',
        ]);
        $superhero = Superhero::findOrFail($id);
        $superhero->update([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'publisher' => $request->publisher,
            'genero_id' => $request->gender_id,
            'universo_id' => $request->universe_id,
            'picture' => $request->picture,
        ]);
        return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully!');
    }

    public function destroy($id){
        $superhero = Superhero::findOrFail($id); 
        $superhero->delete(); 
        return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully'); // Redirigir al índice con mensaje de éxito
    }
}
