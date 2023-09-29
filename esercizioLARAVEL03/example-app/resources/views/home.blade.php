<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <h1>LA {{$title}}</h1>

        <ul>
            <li><a href="{{route('home')}}">HomePage</a></li>
            <li><a href="{{route('articles')}}">Articoli</a></li>
            <li><a href="{{route('aboutMe')}}">Chi Sono</a></li>
        </ul>
        
    </body>
</html>