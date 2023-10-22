<x-layout-main>

    <x-slot:title>Elenco ANIME per genere {{$titleGenre}}</x-slot>


            <h1 class="text-center my-5">Elenco Anime {{$titleGenre}}</h1>


            <ul class="row mx-auto">
        
                @foreach ($data as $anime)
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 flex-wrap mb-5 mx-auto">
                        <div class="card h-100 mx-auto shadow" style="width: 18rem;">
                            <img src="{{$anime['image']}}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column rounded-bottom">
                                <h4 class="card-title my-2">{{$anime['title']}}</h4>
            
                                <div class="flex-grow-1">
        
                                    @foreach ($anime['genres'] as $genre)
            
                                        <a href="{{route('anime.genre', $genre['mal_id'])}}"><span class="card-text px-2 py-0 m-1 btn btn-dark">{{$genre['name']}}</span></a>
                                        
                                    @endforeach
        
                                </div>
            
                                <a href="{{route('anime.anime', ['id' => $anime['mal_id'], 'category_id' => $category_id])}}" class="mt-2 w-100"><button class="btn btn-black w-100">Continua ...</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
        
            </ul>

        <div class="card-footer">
            <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto"><button class="btn btn-black">indietro</button></a>
        </div>


</x-layout-main>