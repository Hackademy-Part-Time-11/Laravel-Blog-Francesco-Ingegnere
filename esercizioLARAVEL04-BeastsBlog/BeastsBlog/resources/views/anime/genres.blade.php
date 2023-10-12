<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <h1>Generi Anime</h1>

    <ul class="row">

        @foreach ($genres as $genre)
            <li class="col-xxl-3 col-lg-4 col-md-6 col-12 list-unstyled flex-wrap"><a href="{{route('anime.genre', $genre['mal_id'])}}" class="text-decoration-none btn btn-dark py-1 my-1 fs-5">{{$genre['name']}}</a></li>
        @endforeach

    </ul>


</x-layout-main>