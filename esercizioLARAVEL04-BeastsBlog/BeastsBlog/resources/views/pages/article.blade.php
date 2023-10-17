<x-layout-main>

    <x-slot:title>Articolo</x-slot>

        <h1 class="mt-5">Articoli</h1>
    
    
            <div class="card text-center">
                <div class="card-header">
                    {{$articles->category}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$articles->title}}</h5>
                    <p class="card-text">{{$articles->description}}</p>
                    <p class="card-text">{{$articles->body}}</p>
                    <a href="{{route('articles')}}" class="btn btn-primary bg-black text-decoration-none p-auto">Indietro</a>
                </div>
                <div class="card-footer text-body-secondary">
                    2 days ago
                </div>
            </div>
            
        </div>

</x-layout-main>