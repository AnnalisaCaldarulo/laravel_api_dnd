<?php

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/anime/genres', [AnimeController::class, 'genres']);
Route::get('/anime/genres/{genre_id}/{genre_name?}', [AnimeController::class, 'indexApi']);


// Route::get('/anime/genres/{genre_id}/{genre_name?}', function ($genre_id, $genre_name = NULL) {
//     //query strings
//     $animes = Http::get(
//         'https://api.jikan.moe/v4/anime?',
//         [
//             'genres' => $genre_id,
//         ]
//     )->json();

//     $animeList = Arr::map($animes['data'], function ($anime) {
//         return [
//             'id' => $anime['mal_id'],
//             'image' => $anime['images']['webp']['large_image_url'],
//             'title' => $anime['title'],
//             'title_english' => $anime['title_english'],
//             'synopsis' => $anime['synopsis'],
//         ];
//     });

//     return response(
//         [
//             'animes' => $animeList,
//             'genre_name' => $genre_name,
//             'genre_id' => $genre_id,
//         ]
//     );
// });
