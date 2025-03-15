<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Superhero;

use Illuminate\Http\Request;

class SuperHerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheros = Superhero::select("id", "name")->get();
        return view("superheros.index", compact("superheros"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select("id", "name")->get();
        return view("superheros.create", compact("genders"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gender_id' => 'required|exists:generos,id',
            'name' => 'required|string|max:255', // Validar el campo publisher
        ]);

        Superhero::create([
            'genero_id' => $request->gender_id,
            'name' => $request->name,
            'universo_id' => 1,
            'real_name' => 'peter parker',
            'picture' => '',
            'publisher' => $request->publisher, // Asegúrate de que este campo esté presente en el formulario
        ]);

        return redirect()->route('superheros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheros = SuperHero::find($id);
    return view('superheros.show', compact('superheros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
