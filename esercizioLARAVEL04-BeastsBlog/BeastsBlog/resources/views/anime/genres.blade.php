<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <h1>Generi Anime</h1>

    <ul class="row">

        @foreach ($genres as $genre)
            <li class="col-lg-6 col-4 list-unstyled flex-wrap"><a href="{{route('anime.genre', $genre['mal_id'])}}" class="text-dark text-decoration-none btn btn-secondary py-1 my-1 fs-5">{{$genre['name']}}</a></li>
        @endforeach

    </ul>


</x-layout-main>