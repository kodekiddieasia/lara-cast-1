<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

Route::get('hello', function () {
    return 'Hello, World!';
});
Route::get('/', function () {
    return view('helloworld');
});
Route::get('helloworld', function () {
    return 'hello world';
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

Route::get('home', function () {
    // return 'home';/
    return view('home');
});

// Route::get('/', function () {
//     return view('welcome');
// });
