<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beasts Blog - Articoli</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        
        {{-- navbar --}}
        <x-navbar />

        <div class="container">
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

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>