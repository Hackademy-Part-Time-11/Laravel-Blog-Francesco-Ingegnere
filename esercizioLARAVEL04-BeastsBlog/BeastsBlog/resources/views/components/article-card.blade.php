<div class="card text-center">
    <div class="card-header">
        {{$category}}
    </div>
    @if ($image)  
        <img class="card-img-top" src="{{$image}}" alt="Card image cap">
    @endif
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text flex-grow-1">{{$description}}</p>
        <button class="btn btn-primary"><a href="{{$route}}" class="text-decoration-none p-auto">Continua ...</a></button>
    </div>
    <div class="card-footer text-body-secondary">
        2 days ago
    </div>
</div>