<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MoviesController;
use App\Models\Category;
use App\Models\Movie;
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


// CATEGORY
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/create', [CategoryController::class, 'store']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
//put = comme POST mais à la place de créer, met à jour/remplace/update.
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);


// MOVIES
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{movie}', [MoviesController::class, 'show']);


// ACTORS
Route::get('/actors', [ActorsController::class, 'index']);
Route::get('/actors/{actor}', [ActorsController::class, 'show']);

Route::get('/exercice/films/creer', function () {
    Movie::create([
        'title' => 'Scarface',
        'synopsis' => 'Rêve américain',
        'duration' => '184',
        'youtube' => '1234',
        'cover' => 'scarface.jpg',
        'released_at' => '1983-01-01',
    ]);

    return redirect('/exercice/films');
});

Route::get('/exercice/films/{id}', function ($id) {
    $movie = Movie::find($id);

    return view('exercice.movie', [
        'movie' => $movie
    ]);
});
