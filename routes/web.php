<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/hello', function () {
    return view('hello', [
        'name' => 'Fiorella',
        'numbers' => [1, 3, 7],
    ]);
});

Route::get('/goodbye', function () {
    return view('good-bye');
});

Route::get('/hello/{name}', function ($name) {
    return view('hello', [
        'name' => $name,
        'numbers' => [],
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'A Propos',
        'team' => ['Fiorella', 'Marina', 'Kant1'],
    ]);
});

Route::get('/about/{user}', function ($user) {
    return view('about-show', [
        'user' => $user,
    ]);
});