<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    

    <div class="row">
        <div class="col-md-4">
            <img src="{{$anime['images']['jpg']['image_url']}}" alt="{{$anime['title']}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{$anime['title']}}</h1>

            <div>
                <p>Punteggio: {{$anime['score']}}</p>
                <p>Durata: {{$anime['duration']}}</p>
            </div>

            <div>
                {!! nl2br( e($anime['synopsis'])) !!}
            </div>
        </div>
    </div>

    @if ($category_id)
        <button class="btn btn-primary mt-3"><a href="{{route('anime.genre', $category_id)}}" class="text-decoration-none p-auto">indietro</a></button>
    @else
        <button class="btn btn-primary mt-3"><a href="{{route('anime.genres')}}" class="text-decoration-none p-auto">indietro ai generi</a></button>
    @endif


    {{-- <button class="btn btn-primary"><a href="{{route('anime.genre', $data['mal_id'])}}" class="text-decoration-none p-auto">indietro</a></button> --}}


</x-layout-main>