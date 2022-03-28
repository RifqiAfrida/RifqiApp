<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('profile', function() {
    
//     $name = "Rifqi";

//     return view('profile', [
//         'name' => $name
//     ]);
// });

Route::get('/', fn() => view('home'));