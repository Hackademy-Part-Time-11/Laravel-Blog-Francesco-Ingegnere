<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <h1 class="mt-5">Generi Anime</h1>

    <ul class="row mt-5">

        @foreach ($genres as $genre)
            <li class="col-xxl-3 col-lg-4 col-md-6 col-12 list-unstyled flex-wrap"><a href="{{route('anime.genre', $genre['mal_id'])}}" class="text-decoration-none btn btn-dark py-1 my-1 fs-5 w-100">{{$genre['name']}}</a></li>
        @endforeach

    </ul>


</x-layout-main>