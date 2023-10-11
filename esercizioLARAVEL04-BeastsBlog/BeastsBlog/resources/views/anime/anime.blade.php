<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    

    <div class="row">
        <div class="col-md-4">
            <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="{{$anime['title']}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{$anime['title']}}</h1>
            <h2>{{$anime['titles']['1']['title']}}</h2>

            <div>
                <p>Punteggio: {{$anime['score']}}</p>
                <p>Durata: {{$anime['duration']}}</p>
                <p>Episodi: {{$anime['episodes']}}</p>
                <p>Anno: {{$anime['year']}}</p>
                <p>Rating: {{$anime['rating']}}</p>
            </div>

            <div>
                {!! nl2br( e($anime['synopsis'])) !!}

                <p class="mt-4">inizio: {{date('d-m-Y', strtotime($anime['aired']['from']))}}</p>
                <p>fine: {{date('d-m-Y', strtotime($anime['aired']['to']))}}</p>
            </div>
        </div>
    </div>

    @if ($category_id)
        <a href="{{route('anime.genre', $category_id)}}" class="text-decoration-none p-auto btn btn-dark mt-3">indietro</a>
    @else
        <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto btn btn-dark mt-3">indietro ai generi</a>
    @endif


</x-layout-main>