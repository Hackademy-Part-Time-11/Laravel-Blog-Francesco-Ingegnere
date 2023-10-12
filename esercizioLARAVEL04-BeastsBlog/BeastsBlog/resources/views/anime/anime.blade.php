<x-layout-main>

    <x-slot:title>Anime</x-slot>

    

    <div class="row">
        <div class="col-md-4">
            <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="{{$anime['title']}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{$anime['title_english']}} ({{$anime['title_japanese']}})</h1>

            <div class="row mt-5">
                <div class="col-lg-6">
                    <p class="fs-5"><span class="fs-4">Durata: </span>  {{$anime['duration']}}</p>
                    <p class="fs-5"><span class="fs-4">Episodi: </span> {{$anime['episodes']}}</p>
                    <p class="fs-5"><span class="fs-4">Anno: </span> {{$anime['year']}}</p>   
                </div>
                <div class="col-lg-6">
                    <p class="fs-5"><span class="fs-4">Punteggio: </span> {{$anime['score']}}</p>
                    <p class="fs-5"><span class="fs-4">Rating: </span> {{$anime['rating']}}</p>
                </div>
            </div>

            <div>
                {!! nl2br( e($anime['synopsis'])) !!}

                <div class="mt-4 d-flex justify-content-around align-items-center w-100 align-content-center">
                    <p class="fs-5"><span class="fs-4">inizio: </span>  {{date('d-m-Y', strtotime($anime['aired']['from']))}}</p>
                    <p class="fs-5"><span class="fs-4">fine: </span>  {{date('d-m-Y', strtotime($anime['aired']['to']))}}</p>
                </div>
            </div>
        </div>
    </div>

    @if ($category_id)
        <a href="{{route('anime.genre', $category_id)}}" class="text-decoration-none p-auto btn btn-dark mt-3">indietro</a>
    @else
        <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto btn btn-dark mt-3">indietro ai generi</a>
    @endif


</x-layout-main>