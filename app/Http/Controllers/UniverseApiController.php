<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universo;

class UniverseApiController extends Controller{

    public function index(){
        $universes = Universo::all();
        return response()->json($universes);
    }

    public function show($name){
        $universe = Universo::where("name",$name)->with("superheroes")->get();
        if (!$universe) {
            return response()->json(['message' => 'Universe not found'], 404);
        }
        return response()->json($universe);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $universe = Universo::create($request->all());
        return response()->json($universe, 201);
    }

    public function update(Request $request, $id){
        $universe = Universo::find($id);
        if (!$universe) {
            return response()->json(['message' => 'Universe not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $universe->update($request->all());
        return response()->json($universe);
    }

    public function destroy($id){
        $universe = Universo::find($id);
        if (!$universe) {
            return response()->json(['message' => 'Universe not found'], 404);
        }

        $universe->delete();
        return response()->json(['message' => 'Universe deleted successfully']);
    }
}