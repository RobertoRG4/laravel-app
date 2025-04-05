<?php
namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller{
    public function index(){
        $genders = Gender::paginate(10);
        return view('genders.index', compact('genders'));
    }

    public function create(){
        return view('genders.create'); 
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Gender::create([
            'name' => $request->name,
        ]);
        return redirect()->route('genders.index');  
    }
    public function show($id){
        $gender = Gender::find($id);
        if (!$gender) {
            abort(404, "Gender not found");
        }
        return view('genders.show', compact('gender'));
    }

    public function edit($id){
        $gender = Gender::findOrFail($id); 
        return view('genders.edit', compact('gender')); 
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $gender = Gender::findOrFail($id);
        $gender->name = $request->name;
        $gender->save();

        return redirect()->route('genders.index');  
    }

    public function destroy($id){
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return redirect()->route('genders.index')->with('success', 'Gender deleted successfully');
    }
}