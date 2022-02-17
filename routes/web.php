<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HelloController;
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

Route::get('/goodbye', function () {
    return view('good-bye');
});

Route::get('/hello', [HelloController::class, 'hello']);

Route::get('/hello/{name}', [HelloController::class, 'name']);


Route::get('/about', [AboutController::class, 'index']);

Route::get('/about/{user}', [AboutController::class, 'show']);