<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperHerosController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/api/universes",[UniverseApiController::class, "index"]);
Route::get("/api/universes/{name}",[UniverseApiController::class, "show"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('/superheroes', SuperHerosController::class);
Route::resource("/genders", GenderController::class);
Route::resource('/universes', UniverseController::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

