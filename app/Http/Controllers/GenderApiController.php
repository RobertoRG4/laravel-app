<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
class GenderApiController extends Controller
{
    public function index(){
        $genders = Gender::all();
        return response()->json($genders);
    }
    public function show($id){
        $gender = Gender::find($id);
        return response()->json([$gender]);
    }

}
