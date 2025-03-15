<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\SuperHerosController;
use Illuminate\Support\Facades\Route;
use App\Models\Universo;
use App\Http\Controllers\UniverseController;

Route::get('/', function () {
    echo 'Hello guys this is my first Laravel project';
    /*echo'<prev>';
    print_r(Universe::all());
    echo '</prev>';*/
    dump(Universo::all());
});

//Route::get("/universes", [UniverseController::class, "index"]);
//Route::post("/universes/create", [UniverseController::class,"create"]);
Route::resource("universes", UniverseController::class);
Route::resource("/gender", GenderController::class);
Route::resource("superheros", SuperHerosController::class);