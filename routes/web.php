<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    return 'Hello, World!';
});
Route::get('/', function () {
    return view('helloworld');
});

Route::get('about', function () {
    return view('about');
    return 'About Page';
    return ['foo' => 'bar'];
});
Route::get('contact', function () {
    return view('contact');
    return 'Contact Page';
    return ['foo' => 'bar'];
});



// Route::get('/', function () {
//     return view('welcome');
// });
