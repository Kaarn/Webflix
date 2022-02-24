<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PolitesseController;
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

Route::get('/bonjour', [PolitesseController::class, 'helloEveryone']);
Route::get('/au-revoir', [PolitesseController::class, 'goodBye']);
Route::get('/bonjour/{name}', [PolitesseController::class, 'helloSomeone']);

Route::get('/a-propos', [AboutController::class, 'index']);
Route::get('/a-propos/{user}', [AboutController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
// Affiche le formulaire
Route::get('/categories/create', [CategoryController::class, 'create']);
// Traite le formulaire
Route::post('/categories/create', [CategoryController::class, 'store']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

// Route::get('/films', [MovieController::class, 'index']);
// Route::get('/films/creer', [MovieController::class, 'create']);
// Route::post('/films/creer', [MovieController::class, 'store']);
// Route::get('/films/{movie}', [MovieController::class, 'show']);

Route::controller(MoviesController::class)->group(function () {
    Route::get('/movies', 'index');
    Route::get('/movies/create', 'create');
    Route::post('/movies/create', 'store');
    Route::get('/movies/{movie}', 'show');
});

Route::get('/exercice/categories', function () {
    return view('exercice.categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/exercice/categories/creer', function () {
    // Le modèle Category correspond à la table categories...
    $category = Category::create([
        'name' => 'Test'
    ]);

    return redirect('/exercice/categories');
});

Route::get('/exercice/categories/{id}', function ($id) {
    dump($id);
    $category = Category::find($id);

    return $category->name;
});

Route::get('/exercice/films', function () {
    return view('exercice.movies', [
        'movies' => Movie::all()
    ]);
});

Route::get('/exercice/films/creer', function () {
    Movie::create([
        'title' => 'Scarface',
        'synopsys' => 'Rêve américain',
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
