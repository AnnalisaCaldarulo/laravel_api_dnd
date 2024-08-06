<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function genres()
    {
        $genres = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        return response($genres['data']);
    }
    public function genresView()
    {
        return view('anime.genres');
    }
    public function index($genre_id, $genre_name = null)
    {
        return view('anime.index', compact('genre_id', 'genre_name'));
    }
    public function indexApi($genre_id, $genre_name = null)
    {
        $animes = Http::get(
            'https://api.jikan.moe/v4/anime?',
            [
                'genres' => $genre_id,
            ]
        )->json();
        $animeList  = Arr::map($animes['data'],  function ($anime) {
            return    [
                'id' => $anime['mal_id'],
                'image' => $anime['images']['webp']['large_image_url'],
                'title' => $anime['title'],
                'synopsis' => $anime['synopsis'],
            ];
        });
        return response([
            'animes' => $animeList,
            'genre_name' => $genre_name,
            'genre_id' => $genre_id
        ]);
    }
}
