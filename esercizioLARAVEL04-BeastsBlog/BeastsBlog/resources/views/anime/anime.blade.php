<x-layout-main>

    <x-slot:title>Anime</x-slot>

    

    <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="{{$anime['title']}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{$anime['title']}}</h1>
            <h2> {{$anime['title_japanese']}}</h2>

            <div class="row mt-5">
                <div class="col-lg-5 bg-secondary rounded py-3 ps-3">
                    <p class="fs-5"><span class="fs-4 fw-semibold">Durata: </span>  {{$anime['duration']}}</p>
                    <p class="fs-5"><span class="fs-4 fw-semibold">Episodi: </span> {{$anime['episodes']}}</p>
                    <p class="fs-5"><span class="fs-4 fw-semibold">Anno: </span> {{$anime['year']}}</p>  
                    <p class="fs-5"><span class="fs-4 fw-semibold">Punteggio: </span> {{$anime['score']}}</p>
                    <p class="fs-5"><span class="fs-4 fw-semibold">Rating: </span> {{$anime['rating']}}</p>
                    <p class="fs-5"><span class="fs-4 fw-semibold">Iniziata il: </span>  {{date('d-m-Y', strtotime($anime['aired']['from']))}}</p>
                    <p class="fs-5"><span class="fs-4 fw-semibold">Terminata il: </span>  {{date('d-m-Y', strtotime($anime['aired']['to']))}}</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-justify fs-5 ps-4">
                        {!! nl2br( e($anime['synopsis'])) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if ($category_id)
        <a href="{{route('anime.genre', $category_id)}}" class="text-decoration-none p-auto btn btn-dark mt-3 ms-5">indietro</a>
    @else
        <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto btn btn-dark mt-3 ms-5">indietro ai generi</a>
    @endif


</x-layout-main>