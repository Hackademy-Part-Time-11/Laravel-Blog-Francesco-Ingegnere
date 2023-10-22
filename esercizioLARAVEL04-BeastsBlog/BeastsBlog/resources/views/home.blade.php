<x-layout-main>

    <x-slot:title>Home</x-slot>

    <div class="card">
        <div class="card-header text-white bg-black">
            <div class="d-flex justify-content-around">
                <h2>ARTICOLI</h2>
                <h2>ANIME</h2>
            </div>
        </div>
        <div class="card-body px-5">
            <div class="row">
                <div class="col-12 col-lg-5 my-5">
                    <a href="{{ route('articles') }}">
                        <div class="headerArticles">
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                    <h1 class="fs-2 text-center">{{$title}}</h1>
                </div>
                <div class="col-12 col-lg-5 my-5">
                    <a href="{{ route('anime.genres') }}">
                        <div class="headerAnime">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        @guest
        <div class="card-footer">
            <p class="text-center my-2">Registrati per scrivere i tuoi articoli</p>
        </div>
        @endguest
    </div>

</x-layout-main>