<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperHerosController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
Route::get('/', function () {
    return view('welcome');
});
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
Route::get("/form",function(){
    return view("form");
});
Route::post("/upload", [FormController::class, "upload"])->name("upload");
Route::post("/download/{path}", [FormController::class, "download"])->where('path', '.*')->name("download");
require __DIR__.'/auth.php';

