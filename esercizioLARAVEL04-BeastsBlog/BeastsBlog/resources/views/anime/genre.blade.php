<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <h1>Elenco Anime</h1>

    <ul class="row">

        @foreach ($data as $anime)
            <div class="col-lg-4 col-md-6 col-12 flex-wrap mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$anime['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$anime['title']}}</h5>
    
                        @foreach ($anime['genres'] as $genre)

                            <a href="{{route('anime.genre', $genre['mal_id'])}}"><span class="card-text px-2 py-0 m-1 btn btn-secondary">{{$genre['name']}}</span></a>
                            
                        @endforeach
                        <br>
    
                        <a href="{{route('anime.anime', ['id' => $anime['mal_id'], 'category_id' => $category_id])}}" class="btn btn-dark mt-2">Continua ...</a>
                    </div>
                </div>
            </div>
        @endforeach

    </ul>

    <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto btn btn-dark">indietro</a>


</x-layout-main>