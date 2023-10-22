<x-layout-main>

    <x-slot:title>Anime</x-slot>

    <div class="card">
        <div class="card-header text-white bg-black">
            <div class="text-center">
                <h1>{{$anime['title']}}</h1>
                <h2> {{$anime['title_japanese']}}</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="{{$anime['title']}}" class="img-fluid w-100">
                </div>
                <div class="col-md-8 px-5">
        
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <p class="text-justify fs-5">
                                {!! nl2br( e($anime['synopsis'])) !!}
                            </p>
                        </div>
                        <div class="col-lg-12 mt-lg-5 d-flex mt-5 bg-secondary rounded py-4">
                            <div class="col-6 ps-4">
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Durata: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['duration']}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Punteggio: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['score']}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Classificazione: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['rating']}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Tipo: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['source']}}</p>
                                </div>
                            </div>
                            <div class="col-6 ps-4">
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Anno: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['year']}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Iniziata il: </p>
                                    <p class="fs-5 col-lg-6 col-12">  {{date('d-m-Y', strtotime($anime['aired']['from']))}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Terminata il: </p>
                                    <p class="fs-5 col-lg-6 col-12">  {{date('d-m-Y', strtotime($anime['aired']['to']))}}</p>
                                </div>
                                <div class="row px-3">
                                    <p class="fs-5 col-lg-6 col-12 fw-semibold">Episodi: </p>
                                    <p class="fs-5 col-lg-6 col-12"> {{$anime['episodes']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            @if ($category_id)
                <a href="{{route('anime.genre', $category_id)}}" class="text-decoration-none p-auto mt-3 ms-5"><button class="btn btn-black">indietro</button></a>
            @else
                <a href="{{route('anime.genres')}}" class="text-decoration-none p-auto mt-3 ms-5"><button class="btn btn-black">indietro ai generi</button></a>
            @endif
        </div>
    </div>




</x-layout-main>