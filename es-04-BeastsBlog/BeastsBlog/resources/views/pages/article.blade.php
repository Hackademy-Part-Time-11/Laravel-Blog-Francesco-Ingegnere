<x-layout-main>

    <x-slot:title>Articolo</x-slot>
 
    
            <div class="card text-center shadow">
                <div class="card-header bg-black text-white">
                    @foreach($articles->categories as $category)
                    <span class="text-white border p-1 rounded border-secondary mx-2">{{$category->name}} </span>
                    @endforeach
                </div>
                <div class="card-body">
                    <h2 class="card-title">{{$articles->title}}</h2>
                    <p class="card-text">{{$articles->description}}</p>
                    <div class="my-5">
                        <img src="{{Storage::url($articles->image)}}" alt="" class="img-fluid">
                    </div>
                    <p class="card-text text-start mx-5">{{$articles->body}}</p>
                    <p class="card-text text-start mx-5">Autore: {{$articles->user->name}}</p>
                    <a href="{{route('articles')}}" class="bg-black text-decoration-none p-auto"><button class="btn btn-black">Indietro</button></a>
                </div>
                <div class="card-footer text-body-secondary">
                    2 days ago
                </div>
            </div>
            
        </div>

</x-layout-main>