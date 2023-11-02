<div class="card text-center shadow mx-3">
    <div class="card-header bg-black text-white">
        @foreach($categories as $category)

        <span class="text-white border p-1 rounded border-secondary">{{$category->name}}</span>

        @endforeach
    </div>
    @if ($image)  
        <img class="card-img-top" src="{{$image}}" alt="Card image cap">
    @endif
    <div class="card-body d-flex flex-column">
        <h3 class="card-title">{{$title}}</h3>
        <p class="card-text flex-grow-1">{{$description}}</p>
        <a href="{{$route}}" class="text-decoration-none p-auto"><button class="btn btn-black">Continua ...</button></a>
    </div>
    <div class="card-footer text-body-secondary">
        2 days ago
    </div>
</div>