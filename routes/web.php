<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/manga/genres', [MangaController::class, 'genres'])->name('manga.genres');
Route::get('manga/genres/{genre_id}/{genre_name?}', [MangaController::class, 'index'])->name('manga.index');
Route::get('manga/show/{manga_id}', [MangaController::class, 'show'])->name('manga.show');

// anime
Route::get('anime/genres', [AnimeController::class, 'genresView'])->name('anime.genres');
Route::get('/anime/genres/{genre_id}/{genre_name?}', [AnimeController::class, 'index'])->name('anime.index');


//dnd
Route::get('/classes',     function () {
    $classes = Http::get('https://www.dnd5eapi.co/api/classes')->json()['results'];
    return view('dnd.classes', ['classes' => $classes]);
})->name('classes');
Route::get('/classes/{index}', function ($index) {
    // dd($index);
    $class = Http::get('https://www.dnd5eapi.co/api/classes/' . $index)->json();
    $class = [
        'index' => $class['index'],
        'name' => $class['name'],
        'equipment' => $class['starting_equipment'],
        'proficiencies' => $class['proficiencies'],
        'choices' => $class['proficiency_choices'],
        'subclass' => $class['subclasses']
    ];
    return view('dnd.class', compact('class'));
})->name('classes.info');
Route::get('/subclasses/{class}', function ($class) {
    // $url = Http::get('https://www.dnd5eapi.co/api/classes/'.$class.'/subclasses')->json()['results'][0]['url'];
    // $subclass = Http::get('https://www.dnd5eapi.co'.$url)->json();
    // dd($subclass);
    // dd($class);
    $subclass = Http::get('https://www.dnd5eapi.co/api/subclasses/' . $class)->json();
    dd($subclass);
    return view('dnd.subclass', compact('subclass'));
})->name('subclass');
