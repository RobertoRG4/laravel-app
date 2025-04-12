<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
class SuperHeroApiController extends Controller
{
    public function index()
    {
        $superhero = Superhero::all();
        return response()->json($superhero);
    }

    public function show($name)
    {
        $superhero = Superhero::where('name', $name)->first();
        if (!$superhero) {
            return response()->json(['message' => 'Superhero not found'], 404);
        }
        return response()->json([$superhero]);
    }

    public function store(Request $request)
    {
        // Logic to create a new superhero
        return response()->json(['message' => 'Superhero created'], 201);
    }

    public function update(Request $request, $id)
    {
        // Logic to update a superhero
        return response()->json(['message' => 'Superhero updated']);
    }

    public function destroy($id)
    {
        // Logic to delete a superhero
        return response()->json(['message' => 'Superhero deleted']);
    }
}
