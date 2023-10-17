<x-layout-main>

    <x-slot:title>Elenco ANIME per genere {{$titleGenre}}</x-slot>

    <h1 class="my-5">Elenco Anime {{$titleGenre}}</h1>

    <ul class="row">

        @foreach ($data as $anime)
            <div class="col-xxl-3 col-lg-4 col-md-6 col-12 flex-wrap mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <img src="{{$anime['image']}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title my-2">{{$anime['title']}}</h4>
    
                        <div class="flex-grow-1">

                            @foreach ($anime['genres'] as $genre)
    
                                <a href="{{route('anime.genre', $genre['mal_id'])}}"><span class="card-text px-2 py-0 m-1 btn btn-secondary">{{$genre['name']}}</span></a>
                                
                            @endforeach

                        </div>
    
                        <a href="{{route('anime.anime', ['id' => $anime['mal_id'], 'category_id' => $category_id])}}" class="btn btn-dark mt-2 w-100">Continua ...</a>
                    </div>
                </div>
            </div>
        @endforeach

    </ul>

    <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto btn btn-dark">indietro</a>


</x-layout-main>