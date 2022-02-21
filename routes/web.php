<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HelloController;
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



Route::get('/categories', [CategoryController::class, 'index']);



//FORM

//Affiche le formulaire
Route::get('/categories/creer', function () {
    return view('categories.create');
});

//Traite le formulaire
Route::post('/categories/creer', function () {
    //Vérifier les erreurs
    request()->validate([
        'name' => 'required|min:3|max:10',
        'email' => 'required|email',
    ]);


    dump(request('name'));
    return 'OK';
});










//EXOS

//CATEGORY
Route::get('/exercice/categories', function () {
    return view('exercice.categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/exercice/categories/creer', function () {
    $category = Category::create([
        'name' => 'test'
    ]);

    return redirect('/exercice/categories');
});

Route::get('/exercice/categories/{id}', function ($id) {
    return Category::find($id);
});


//MOVIES
Route::get('/exercice/films', function () {
    return view('exercice.movies', [
        'movies' => Movie::all()
    ]);
});

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
