<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        //CATEGORIES
        //On va faire un appel sur l'API de The Movie DB
        $response = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=72148c61e7729499f1b6d7ac4508fd86&language=fr');
        $genres = $response->json()['genres'];

        foreach ($genres as $genre) {
            Category::factory()->create(['name' => $genre['name']]);
        }

        //MOVIES
        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=72148c61e7729499f1b6d7ac4508fd86&language=fr');
        $movies = $response->json()['results'];

        foreach ($movies as $movie) {
            Movie::factory()->create([
                'title' => $movie['original_title'],
                'synopsis' => $movie['overview'],
                'cover' => 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'],
                'released_at' => $movie['release_date'],
            ]);
        }
    }
}
