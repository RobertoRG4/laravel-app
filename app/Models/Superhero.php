<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;
    
    protected $table = "superheroes";
    
    protected $fillable = [
        "genero_id", 
        "name", 
        "universo_id", 
        "real_name", 
        "picture", 
        "publisher", 
    ];
    public function gender(){
    return $this->belongsTo(Gender::class, 'genero_id');
    }

    public function universe(){
    return $this->belongsTo(Universo::class, 'universo_id');
    }
}

