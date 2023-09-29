<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi Sono</title>
    </head>
    <body>
        <h1>Chi Sono</h1>

        <ul>
            <li><a href="{{route('home')}}">HomePage</a></li>
            <li><a href="{{route('articles')}}">Articoli</a></li>
            <li><a href="{{route('aboutMe')}}">Chi Sono</a></li>
        </ul>

        <p>
            {{$description}}
        </p>
        
    </body>
</html>