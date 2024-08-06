<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function genres()
    {
        $genres = Http::get('https://api.jikan.moe/v4/genres/manga')->json()['data'];
        return view('manga.genres', compact('genres'));
    }
    public function index($genre_id, $genre_name = NULL)
    {
        $mangas = Http::get('https://api.jikan.moe/v4/manga?genres=' . $genre_id)->json()['data'];
        $mangas  = Arr::map($mangas, fn ($manga) =>
        [
            'id' => $manga['mal_id'],
            'image' => $manga['images']['webp']['large_image_url'],
            'title' => $manga['title'],
            'author' => $manga['authors'][0]['name'],
            'synopsis' => $manga['synopsis'],
            'year' => $manga['published']['string'],
        ]);
        return view('manga.index', compact('genre_name', 'mangas'));
    }
    public function show($manga_id)
    {
        $manga = Http::get('https://api.jikan.moe/v4/manga/' . $manga_id . '/full')->json()['data'];
        $manga = [
            'id' => $manga['mal_id'],
            'image' => $manga['images']['webp']['large_image_url'],
            'title' => $manga['title'],
            'author' => $manga['authors'][0]['name'],
            'synopsis' => $manga['synopsis'],
            'year' => $manga['published']['string'],
        ];
        // $manga = Arr::only($manga, ['mal_id', 'images', 'title', 'authors', 'synopsis']);
        return view('manga.show', compact('manga'));
    }
}
