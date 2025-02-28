<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;

Route::get('/', function () {
    echo 'Hello guys this is my first Laravel project';
    /*echo'<prev>';
    print_r(Universe::all());
    echo '</prev>';*/
    dump(Universe::all());
});
