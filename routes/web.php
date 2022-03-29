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

Route::view('contact', 'contact');

Route::view('about', 'about');

Route::view('profile', 'profile');

Route::view('posts/first-post', 'posts.show');