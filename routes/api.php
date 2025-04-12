<?php

use App\Http\Controllers\GenderApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\SuperHeroApiController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get("/universes",[UniverseApiController::class, "index"]);
Route::get("/universes/{name}",[UniverseApiController::class, "show"]);
Route::get("/superheroes",[SuperHeroApiController::class, "index"]);
Route::get("/superheroes/{name}",[SuperHeroApiController::class, "show"]);
Route::get("/genders",[GenderApiController::class, "index"]);
Route::get("/genders/{id}",[GenderApiController::class, "show"]);