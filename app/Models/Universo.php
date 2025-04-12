<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universo extends Model
{
    protected $table = "universos";
    protected $fillable = ["name"] ;
    public function superheroes()
    {
        return $this->hasMany(Superhero::class, 'universo_id');
    }
}
