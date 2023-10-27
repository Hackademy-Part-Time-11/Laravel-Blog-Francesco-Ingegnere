<x-layout-main>

    <x-slot:title>Genere Anime</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Generi Anime</h1>
        </div>
        <div class="card-body">

            <ul class="row mt-5 ms-0">
        
                @foreach ($genres as $genre)
                    <li class="col-xxl-3 col-lg-4 col-md-6 col-12 list-unstyled flex-wrap"><a href="{{route('anime.genre', $genre['mal_id'])}}" class="text-decoration-none py-1 my-1 fs-5 w-100"><button class="btn btn-black w-100 my-1">{{$genre['name']}}</button></a></li>
                @endforeach
        
            </ul>

        </div>
    </div>



</x-layout-main>