<x-layout-main>

    <x-slot:title>Articolo</x-slot>

        <h1>Articoli</h1>
    
    
            <div class="card text-center">
                <div class="card-header">
                    {{$articles['category']}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$articles['title']}}</h5>
                    <p class="card-text">{{$articles['description']}}</p>
                    <a href="{{route('article', $articles['id'])}}" class="btn btn-primary">Continua ...</a>
                </div>
                <div class="card-footer text-body-secondary">
                    2 days ago
                </div>
            </div>
            
        </div>

</x-layout-main>