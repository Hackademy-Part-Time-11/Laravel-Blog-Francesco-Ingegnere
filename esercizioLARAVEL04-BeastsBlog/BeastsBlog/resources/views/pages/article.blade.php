<x-layout-main>

    <x-slot:title>Articolo</x-slot>

        <h1 class="mt-5">Articoli</h1>
    
    
            <div class="card text-center">
                <div class="card-header bg-black text-white">
                    {{$articles->category}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$articles->title}}</h5>
                    <p class="card-text">{{$articles->description}}</p>
                    <div class="my-5">
                        <img src="{{Storage::url($articles->image)}}" alt="" class="img-fluid">
                    </div>
                    <p class="card-text">{{$articles->body}}</p>
                    <a href="{{route('articles')}}" class="bg-black text-decoration-none p-auto"><button class="btn btn-black">Indietro</button></a>
                </div>
                <div class="card-footer text-body-secondary">
                    2 days ago
                </div>
            </div>
            
        </div>

</x-layout-main>