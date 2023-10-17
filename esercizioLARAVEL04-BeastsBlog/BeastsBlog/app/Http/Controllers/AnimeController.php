<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use App\Models\AnimeCategory;

class AnimeController extends Controller
{
    const URL = 'https://api.jikan.moe/v4/';

    public function genres () {
        $response = Http::get(self::URL.'genres/anime');

        $json = $response->json();

        return view('anime.genres', ['genres' => $json['data']]);
    }

    public function genre ($id) {
        $endpoint = self::URL.'anime';

        $responseGenres = Http::get(self::URL.'genres/anime')->json();

        $titleGenre = '';

        foreach($responseGenres['data'] as $genre){
            if($genre['mal_id'] == $id){
                $titleGenre = $genre['name'];
            }
        }

        $responseJSON = Http::get($endpoint, ['genres' => $id])->json();

        $data = $responseJSON['data'];

        $data = Arr::map($data, function ($anime) {
            return [
                'mal_id' => $anime['mal_id'],
                'title' => $anime['title'],
                'image' => $anime['images']['jpg']['image_url'],
                'genres' => $anime['genres'],
            ];
        });

        return view('anime.genre', compact('data'), ['category_id' => $id, 'titleGenre' => $titleGenre]);
    }

    public function anime ($id, $category_id = null) {
        $endpoint = self::URL.'anime/'.$id;

        $responseJSON = Http::get($endpoint)->json();

        $data = $responseJSON['data'];

        return view('anime.anime', ['anime' => $data, 'category_id' => $category_id]);
    }

    public function categoryAnime () {
        $response = Http::get(self::URL.'genres/anime');

        $categories = $response->json();

        foreach ($categories['data'] as $category) {
            $categoryAnime = new AnimeCategory();

            $categoryAnime->id = $category['mal_id'];
            $categoryAnime->name = $category['name'];

            $categoryAnime->save();
        }
    }
}
