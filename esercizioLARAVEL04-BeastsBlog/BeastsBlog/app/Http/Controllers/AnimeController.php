<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class AnimeController extends Controller
{
    const URL = 'https://api.jikan.moe/v4/';

    public function genres () {
        $response = Http::withOptions(['verify' => false])->get(self::URL.'genres/anime');

        $json = $response->json();

        return view('anime.genres', ['genres' => $json['data']]);
    }

    public function genre ($id) {
        $endpoint = self::URL.'anime';

        $responseJSON = Http::withOptions(['verify' => false])->get($endpoint, ['genres' => $id])->json();

        $data = $responseJSON['data'];

        $data = Arr::map($data, function ($anime) {
            return [
                'mal_id' => $anime['mal_id'],
                'title' => $anime['title'],
                'image' => $anime['images']['jpg']['image_url'],
                'genres' => $anime['genres'],
            ];
        });

        return view('anime.genre', compact('data'), ['category_id' => $id]);
    }

    public function anime ($id, $category_id = null) {
        $endpoint = self::URL.'anime/'.$id;

        $responseJSON = Http::withOptions(['verify' => false])->get($endpoint)->json();

        $data = $responseJSON['data'];

        return view('anime.anime', ['anime' => $data, 'category_id' => $category_id]);
    }
}
