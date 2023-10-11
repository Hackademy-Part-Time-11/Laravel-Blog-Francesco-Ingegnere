<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <h1>Elenco Anime</h1>

    <ul class="row">

        @foreach ($data as $anime)
            <li class="col-lg-4 col-md-6 col-12 list-unstyled flex-wrap"><a href="{{route('anime.anime', ['id' => $anime['mal_id'], 'category_id' => $category_id])}}" class="text-dark text-decoration-none btn btn-secondary py-1 my-1 fs-5">{{$anime['title']}}</a></li>
        @endforeach

    </ul>

    <button class="btn btn-primary"><a href="{{route('anime.genres')}}" class="text-decoration-none p-auto">indietro</a></button>


</x-layout-main>